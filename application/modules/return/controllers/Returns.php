<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 #------------------------------------    
    # Author: Bdtask Ltd
    # Author link: https://www.bdtask.com/
    # Dynamic style php file
    # Developed by :Isahaq
    #------------------------------------    

class Returns extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
  
        $this->load->model(array(
            'return_model')); 
        if (! $this->session->userdata('isLogIn'))
            redirect('login');
          
    }
   

   public function bdtask_return_form(){
        $data['title']    = display('return');
        $data['module']   = "return";  
        $data['page']     = "form";  
        echo Modules::run('template/layout', $data); 
   }


    public function bdtask_invoice_return_form() {

        $invoice_id = trim($this->input->post('invoice_id',TRUE));
        $invid = $this->db->select('invoice_id')->from('invoice')->where('invoice', $invoice_id)->get()->row();
        $query = $this->db->select('invoice_id')->from('invoice')->where('invoice', $invoice_id)->get();

        if ($query->num_rows() == 0) {
            $this->session->set_flashdata(array('exception' => display('please_input_correct_invoice_no')));
            redirect('return_form');
        }

        $invoice_detail = $this->return_model->invoice_return_data($invoice_id);
        $i = 0;
        if (!empty($invoice_detail)) {
            foreach ($invoice_detail as $k => $v) {
                $i++;
                $invoice_detail[$k]['sl'] = $i;
            }
        }

        $data = array(
            'title'         => display('invoice_return'),
            'invoice_id'    => $invoice_detail[0]['invoice_id'],
            'customer_id'   => $invoice_detail[0]['customer_id'],
            'customer_name' => $invoice_detail[0]['customer_name'],
            'date'          => $invoice_detail[0]['date'],
            'total_amount'  => $invoice_detail[0]['total_amount'],
            'paid_amount'   => $invoice_detail[0]['paid_amount'],
            'due_amount'    => $invoice_detail[0]['due_amount'],
            'total_discount'=> $invoice_detail[0]['total_discount'],
            'tax'           => $invoice_detail[0]['tax'],
            'total_tax'     => $invoice_detail[0]['total_tax'],
            'invoice_all_data' => $invoice_detail,
        );
        $data['module']   = "return";  
        $data['page']     = "invoice_return_form";  
        echo Modules::run('template/layout', $data); 
    }


       public function return_invoice() {

        $invoice_id = $this->return_model->return_invoice_entry();
        $this->session->set_flashdata(array('message' => display('successfully_added')));

        redirect("invoice_return_details/".$invoice_id);
    }


        //wastage return list end
    public function invoice_return_details($invoice_id) {

        $invoice_detail = $this->return_model->retrieve_invoice_html_data($invoice_id);
        $subTotal_quantity = 0;
        $subTotal_cartoon = 0;
        $subTotal_discount = 0;
        $subTotal_ammount = 0;
        if (!empty($invoice_detail)) {
            foreach ($invoice_detail as $k => $v) {
                $invoice_detail[$k]['final_date'] = $this->occational->dateConvert($invoice_detail[$k]['date_return']);
                $subTotal_quantity = $subTotal_quantity + $invoice_detail[$k]['ret_qty'];
                $subTotal_ammount = $subTotal_ammount + $invoice_detail[$k]['total_ret_amount'];
            }

            $i = 0;
            foreach ($invoice_detail as $k => $v) {
                $i++;
                $invoice_detail[$k]['sl'] = $i;
            }
        }
        $data = array(
            'title'            => display('invoice_return'),
            'invoice_id'       => $invoice_detail[0]['invoice_id'],
            'invoice_no'       => $invoice_detail[0]['return_id'],
            'customer_name'    => $invoice_detail[0]['customer_name'],
            'customer_address' => $invoice_detail[0]['customer_address'],
            'customer_mobile'  => $invoice_detail[0]['customer_mobile'],
            'customer_email'   => $invoice_detail[0]['customer_email'],
            'final_date'       => $invoice_detail[0]['final_date'],
            'total_amount'     => number_format($invoice_detail[0]['net_total_amount'], 2, '.', ','),
            'subTotal_quantity'=> $subTotal_quantity,
            'deduction'        => number_format($invoice_detail[0]['deduction'], 2, '.', ','),
            'total_deduct'     => number_format($invoice_detail[0]['total_deduct'], 2, '.', ','),
            'total_tax'        => number_format($invoice_detail[0]['total_tax'], 2, '.', ','),
            'subTotal_ammount' => number_format($subTotal_ammount, 2, '.', ','),
            'totalnamount'     => number_format(($subTotal_ammount+$invoice_detail[0]['total_tax'])-$invoice_detail[0]['total_deduct'], 2, '.', ','),
            'note'             => $invoice_detail[0]['reason'],
            'invoice_all_data' => $invoice_detail,
        );

        $data['module']   = "return";  
        $data['page']     = "return_invoice_html";  
        echo Modules::run('template/layout', $data);
    }


        public function bdtask_supplier_return() {
        $purchase_id = trim($this->input->post('purchase_id',TRUE));
        $query = $this->db->select('purchase_id')->from('product_purchase')->where('purchase_id', $purchase_id)->get();
        if ($query->num_rows() == 0) {
            $this->session->set_flashdata(array('exception' => display('please_input_correct_purchase_id')));
            redirect('supplier_return');
        }
        $purchase_detail = $this->return_model->supplier_return($purchase_id);

        $i = 0;
        if (!empty($purchase_detail)) {
            foreach ($purchase_detail as $k => $v) {
                $i++;
                $purchase_detail[$k]['sl'] = $i;
            }
        }

        $data = array(
            'title'         => display('supplier_return'),
            'purchase_id'   => $purchase_detail[0]['purchase_id'],
            'supplier_id'   => $purchase_detail[0]['supplier_id'],
            'supplier_name' => $purchase_detail[0]['supplier_name'],
            'date'          => $purchase_detail[0]['purchase_date'],
            'total_amount'  => $purchase_detail[0]['total_amount'],
            'total_discount'=> $purchase_detail[0]['total_discount'],
            'purchase_all_data' => $purchase_detail,
        );
        $data['module']   = "return";  
        $data['page']     = "supplier_return_form";  
        echo Modules::run('template/layout', $data);
    }

    
       public function return_suppliers() {
        $purchase_id = $this->return_model->return_supplier_entry();
        $this->session->set_flashdata(array('message' => display('successfully_added')));
         redirect("supplier_return_details/".$purchase_id);
    }


        // supplier return html data
    public function supplier_return_details($purchase_id) {

        $return_detail = $this->return_model->supplier_return_html_data($purchase_id);
        $subTotal_quantity = 0;
        $subTotal_cartoon = 0;
        $subTotal_discount = 0;
        $subTotal_ammount = 0;
        if (!empty($return_detail)) {
            foreach ($return_detail as $k => $v) {
                $return_detail[$k]['final_date'] = $this->occational->dateConvert($return_detail[$k]['date_return']);
                $subTotal_quantity = $subTotal_quantity + $return_detail[$k]['ret_qty'];
                $subTotal_ammount = $subTotal_ammount + $return_detail[$k]['total_ret_amount'];
            }

            $i = 0;
            foreach ($return_detail as $k => $v) {
                $i++;
                $return_detail[$k]['sl'] = $i;
            }
        }

        $data = array(
            'title'          => display('supplier_return'),
            'purchase_id'    => $return_detail[0]['purchase_id'],
            'invoice_no'     => $return_detail[0]['return_id'],
            'supplier_name'  => $return_detail[0]['supplier_name'],
            'address'        => $return_detail[0]['address'],
            'mobile'         => $return_detail[0]['mobile'],
            'final_date'     => $return_detail[0]['final_date'],
            'total_amount'   => number_format($return_detail[0]['net_total_amount'], 2, '.', ','),
            'subTotal_quantity' => $subTotal_quantity,
            'deduction'      => number_format($return_detail[0]['deduction'], 2, '.', ','),
            'total_deduct'   => number_format($return_detail[0]['total_deduct'], 2, '.', ','),
            'subTotal_ammount' => number_format($subTotal_ammount, 2, '.', ','),
            'note'           => $return_detail[0]['reason'],
            'return_detail'  => $return_detail,
        );

        $data['module']   = "return";  
        $data['page']     = "return_supplier_html";  
        echo Modules::run('template/layout', $data);
    }


        public function bdtask_invoice_return_list() {
        $config["base_url"] = base_url('invoice_return_list/');
        $config["total_rows"] = $this->return_model->return_list_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 2;
        $config["num_links"] = 5;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['module']  = "return";
        $data['title'] = display('stock_return_list');
        $data['return_list']=$this->return_model->return_list($config["per_page"], $page);
         $data['page']   = "invoice_return_list";
        echo Modules::run('template/layout', $data);
    }

    // date between return report list
    public function datewise_invoic_return_list() {
        $from_date = $this->input->post('from_date',TRUE);
        $to_date = $this->input->post('to_date',TRUE);
        $config["base_url"] = base_url('invoice_return_search/');
        $config["total_rows"] = $this->return_model->return_dateWise_invoice_count($from_date,$to_date);
        $config["per_page"] = 10;
        $config["uri_segment"] = 2;
        $config["num_links"] = 5;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["links"]  = $this->pagination->create_links();
        $data['module'] = "return";
        $data['title']  = display('stock_return_list');
        $data['return_list']=$this->return_model->return_dateWise_invoice($from_date,$to_date,$config["per_page"], $page);
         $data['page']   = "invoice_return_list";
        echo Modules::run('template/layout', $data);
    }



        public function supplier_return_list() {
        $config["base_url"] = base_url('supplier_return_list/');
        $config["total_rows"] = $this->return_model->supplier_return_list_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 2;
        $config["num_links"] = 5;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["links"]  = $this->pagination->create_links();
        $data['module'] = "return";
        $data['title']  = display('supplier_return_list');
        $data['return_list']=$this->return_model->supplier_return_list($config["per_page"], $page);
         $data['page']   = "return_supllier_list";
        echo Modules::run('template/layout', $data);
    }


        // date wise supplier return list
    public function datebwteen_supplier_return_list() {
        $from_date = $this->input->post('from_date',TRUE);
        $to_date = $this->input->post('to_date',TRUE);
        $config["base_url"] = base_url('supplier_return_search/');
        $config["total_rows"] = $this->return_model->return_dateWise_supplier_count($from_date,$to_date);
        $config["per_page"] = 10;
        $config["uri_segment"] = 2;
        $config["num_links"] = 5;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["links"]  = $this->pagination->create_links();
        $data['module'] = "return";
        $data['title']  = display('supplier_return_list');
        $data['return_list']=$this->return_model->return_dateWise_supplier($from_date, $to_date,$config["per_page"], $page);
         $data['page']   = "return_supllier_list";
        echo Modules::run('template/layout', $data);
    }


    // wastage return list start
    public function wastage_return_list() {
        $config["base_url"] = base_url('wastage_return_list/');
        $config["total_rows"] = $this->return_model->wastage_return_list_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 2;
        $config["num_links"] = 5;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["links"]  = $this->pagination->create_links();
        $data['module'] = "return";
        $data['title']  = display('wastage_return_list');
        $data['return_list']=$this->return_model->wastage_return_list($config["per_page"], $page);
         $data['page']   = "wastage_return_list";
        echo Modules::run('template/layout', $data);
    }



        public function delete_retutn_invoice($invoice_id = null) {
        if ($this->return_model->returninvoice_delete($invoice_id)) {
            #set success message
            $this->session->set_flashdata('message', display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception', display('please_try_again'));
        }
        redirect("invoice_return_list");
    }

        // return delete with purchase id 
    public function delete_retutn_purchase($purchase_id = null) {
        if ($this->return_model->return_purchase_delete($purchase_id)) {
            #set success message
            $this->session->set_flashdata('message', display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception', display('please_try_again'));
        }
        redirect("supplier_return_list");
    }
}

