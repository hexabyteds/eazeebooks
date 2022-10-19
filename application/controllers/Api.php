<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Api extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array(
            'Api_model',
        )); 
    $this->load->library('ciqrcode');
    }


    public function index(){

        $json['response'] = array(
            'status' => 'ok',
            'message' => "Welcome to our store",
        ); 
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
        
    }

    public function companyinfo(){
        $company = $this->Api_model->retrieve_company();

        if($company){
            $json['response'] = array(
                'status'       => 'ok',
                'company_info' => $company
            );
        }else{
            $json['response'] = array(
                'status'       => 'error',
                'company_info' => @$company
            );
        }

        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }



    public function user_registration(){


        $json = array();

        $firstname          =  $_GET['firstname'];
        $lastname           =  $_GET['lastname'];
        $companyname        =  $_GET['companyname'];
        $address            =  $_GET['address'];
        $email              =  $_GET['email'];
        $phone              =  $_GET['phone'];
        $password           =  'gef'.$_GET['password'];
        $userid             =  $this->generator(8);
        

        if(!empty($firstname) && !empty($lastname) && !empty($companyname) && !empty($address)
            && !empty($email) && !empty($phone) && !empty($password)){

            if($this->registration_checkUser($email,$phone,$companyname,$device_id)){

                $json['response'] = [
                    'status'  => 'error',
                    'message' => "This user allredy exist"
                ];

            }else{

                $password           =  md5($password);

                $dataArray = array(
                 'user_id'    => $userid,   
                 'first_name' => $firstname,
                'last_name'  => $lastname,
                'company_name'=>$companyname,
                'address'     =>$address,
                'phone'       =>$phone,
                'email'      => $email,
                'password'   => $password,
                'user_type'  => 2,
                'status'     => 1
                );

            
                if($this->Api_model->user_entry($dataArray)){

                    $json['response'] = [
                        'status'  => 'ok',
                        'message' => "Registration Successfull!"
                    ];

                    
                }else{

                    $json['response'] = [
                        'status'  => 'error',
                        'message' => "Registration error!"
                    ];

                }
                
            }

        }else{

            $json['response'] = [
                'status'  => 'error',
                'message' => "Data not found!"
            ];

        }

        echo $json_encode = json_encode($json, JSON_UNESCAPED_UNICODE);

    }


    public function registration_checkUser($email,$phone,$companyname,$device_id){

        $result = $this->db->select('*')->from('company_info')
        ->where('phone',$phone)
        ->or_where('email',$email)
        ->or_where('device_id',$device_id)
        ->or_where('company_name',$companyname)
        ->get()->row();
        
        if($result){
            return TRUE;
        }else{
            return false;
        }
    }


 




    public function generator($lenth) {
        $number = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "N", "M", "O", "P", "Q", "R", "S", "U", "V", "T", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0");

        for ($i = 0; $i < $lenth; $i++) {
            $rand_value = rand(0, 61);
            $rand_number = $number["$rand_value"];

            if (empty($con)) {
                $con = $rand_number;
            } else {
                $con = "$con" . "$rand_number";
            }
        }
        return $con;
    }



    public function login(){ 

        $email      = $this->input->get('email');
        $passwor = 'gef'.$this->input->get('password');
        $password   =  md5($passwor); 

        if (empty($email) || empty($this->input->get('password'))) {
            $json['response'] = [
                'status'     => 'error',
                'type'       => 'required_field',
                'message'    => 'required_field'
            ];

        } else {

            $user = $this->checkUser($email,$password);

            if($user) {
         
                $sData = array(
                    'user_id'     => $user->user_id,
                    'firstname'   => $user->first_name,
                    'lastname'    => $user->last_name,
                    'email'       => $user->username,
                    'phone'       => $user->phone,
                    'address'     => $user->address,
                    'password'    => $user->password,
                    'company_name'=> $user->company_name,
                    'logo'        => base_url().@$user->logo,
                    'csrf_test_name' =>$this->security->get_csrf_hash(),
                );
                
                $json['response'] = [
                    'status'       => 'ok',
                    'user_data'    => $sData,
                    'message'      => 'Successfully login'
                ];

            } else {

                $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'no data found'
                ];

            } 

        }
        
        echo json_encode($json, JSON_UNESCAPED_UNICODE); 

    }


    public function checkUser($email,$password){
        
       
         return $this->db->select("a.*,b.*")
            ->from('user_login a')
            ->join('users b', 'b.user_id = a.user_id')
            ->where('a.username', $email)
            ->where('a.password', $password)
            ->get()
            ->row();
    }


    public function user_edit_form(){

        $id = $this->input->get('id');
        $userdata =  $this->db->select("a.*,b.*")
            ->from('user_login a')
            ->join('users b', 'b.user_id = a.user_id')
            ->where('a.user_id',$id)
            ->get()
            ->row();
        
        if(!empty($userdata)){

            $json['response'] = [
                'status'    => 'ok',
                'user_id'   => $userdata->id,
                'firstname' => $userdata->firstname,
                'lastname'  => $userdata->lastname,
                'email'     => $userdata->email,
                'password'  => $userdata->password,
                'company_name' => $userdata->company_name,
                'address' => $userdata->address,
                'logo'      => base_url().$userdata->logo
            ];

        }else{

            $json['response'] = [
                'status'     => 'error',
                'message'    => 'No data found'
            ]; 

        }
           
        echo json_encode($json, JSON_UNESCAPED_UNICODE); 
    }


    public function user_update(){

            $id             = $this->input->post('id'); 
            $firstname      = $this->input->post('firstname');
            $lastname       = $this->input->post('lastname');  
            $email          = $this->input->post('email');
            $old_password   = $this->input->post('old_password');
            $company_name   = $this->input->post('company_name');
            $address        = $this->input->post('address');
            
           

         if(!empty($firstname) && !empty($old_password) && !empty($email)){

            $checkUser =  $this->db->where('username',$email)->where('password',md5('gef'.$old_password))->get('user_login')->row();


            if(!empty($checkUser)){

                $https = false;
                 if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
                  $protocol = 'https://';
                }
                else {
                  $protocol = 'http://';
                }

                $dirname = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/').'/';
                $root=$protocol.$_SERVER['HTTP_HOST'].$dirname;
                
                 $logo = $this->fileupload->do_upload(
            './assets/img/user/', 
            'logo'

            );
            $old_logo = $this->input->post('old_logo',TRUE);

                // if (@$_FILES['logo']['name']) {
                   
                //     $config['upload_path']   = '/assets/img/user/';
                //     $config['allowed_types'] = 'gif|jpg|jpeg|png';
                //     $config['overwrite']     = false;
                //     $config['max_size']      = 1024;
                //     $config['remove_spaces'] = true;
                //     $config['max_filename']   = 10;
                //     $config['file_ext_tolower'] = true;

                //     $this->fileupload->initialize($config);

                //     if (!$this->fileupload->do_upload('logo'))
                //     {
                //       $error = $this->fileupload->display_errors();
                       
                //     } else {
                //         $data = $this->fileupload->data();
                //         $logo = $root.$config['upload_path'].$data['file_name'];
                       
                //     }

                // } else {
                //     $old_logo = $this->input->post('old_logo',TRUE);
                // }

                $userData = array(
                    'first_name'     => $firstname,
                    'last_name'      => $lastname,
                    'logo'          => (!empty($logo)?$logo:$old_logo),
                    'address'       => $address,
                    'company_name'  => $company_name
                ); 
                

                $update =  $this->db->where('user_id', $id)->update('users',$userData);
            
                if($update){

                    $userdata =  $this->db->select("a.*,b.*")->from('users a')->join('user_login b','b.user_id = a.user_id')->where('a.user_id', $id)->get()->row();
                    
                     $sData = array(
                    'user_id'     => $userdata->user_id,
                    'firstname'   => $userdata->first_name,
                    'lastname'    => $userdata->last_name,
                    'email'       => $userdata->username,
                    'phone'       => $userdata->phone,
                    'address'     => $userdata->address,
                    'password'    => $userdata->password,
                    'company_name'=> $userdata->company_name, 
                    'logo'        => (!empty($userdata->logo)?base_url().@$userdata->logo:''),
                    'csrf_test_name' =>$this->security->get_csrf_hash(),
                );

                    $json['response'] = [
                        'status'     => 'ok',
                        'message'   => 'Successfully Updated',
                        'user_data'    => $sData
                    ];

                }else{
                    
                    $json['response'] = [
                        'status'     => 'error',
                        'user_data'    => [],
                        'message'    => 'Please try again'
                    ]; 
                }

            }else{
                $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'Invalid Password'
                ];
            }
        }else{
                $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'Some field and empty, Please try again'
                ];
            }

        echo json_encode($json, JSON_UNESCAPED_UNICODE); 
    }



    public function change_password(){

        $id             = $this->input->get('id');  
        $old_password   = $this->input->get('old_password');
        $new_password   = $this->input->get('new_password');
        if(!empty($new_password)&& !empty($old_password) && !empty($id)){

            $checkUser =  $this->db->where('user_id',$id)->where('password',md5('gef'.$old_password))->get('user_login')->row();

            if(!empty($checkUser)){
                $update =  $this->db->set('password',md5('gef'.$new_password))->where('user_id', $id)->update('user_login');
                
                $json['response'] = [
                    'status'     => 'ok',
                    'message'    => 'Password change Successfully'
                ];
            
            }else{
                $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'Your current password are Invalid'
                ];
            }

        }else{
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'Some field and empty, Please try again'
            ];
        }

         echo json_encode($json, JSON_UNESCAPED_UNICODE);

    }


   
    
    public function product_list(){

        $start = $this->input->get('start');
        if($start){  
            $start = ($start==1?0:$start);
            $products = $this->Api_model->product_list($limit=15,$start);
            
        }else{
            $products = $this->Api_model->searchproduct_list();
        }


        if (!empty($products)) {

            foreach ($products as $k => $v) {

                $s = $this->db->select('sum(quantity) as totalSalesQnty')->where('product_id',$v['product_id'])->get('invoice_details')->row();
                $p = $this->db->select('sum(quantity) as totalBuyQnty')->where('product_id',$v['product_id'])->get('product_purchase_details')->row();
                $stokqty = $p->totalBuyQnty-$s->totalSalesQnty;
                
                  
                $config['cacheable'] = true; //boolean, the default is true
                $config['cachedir'] = ''; //string, the default is application/cache/
                $config['errorlog'] = ''; //string, the default is application/logs/
                $config['quality'] = true; //boolean, the default is true
                $config['size'] = '1024'; //interger, the default is 1024
                $config['black'] = array(224, 255, 255); // array, default is array(255,255,255)
                $config['white'] = array(70, 130, 180); // array, default is array(0,0,0)
                $this->ciqrcode->initialize($config);
                //Create QR code image create
                $params['data'] = $products[$k]['product_id'];
                $products[$k]['stock_qty']     = (!empty($stokqty)?$stokqty:0);
                $params['level'] = 'H';
                $params['size'] = 10;
                $image_name = $products[$k]['product_id'] . '.png';
                $params['savename'] = FCPATH . 'my-assets/image/qr/' . $image_name;
                $this->ciqrcode->generate($params);

                $products[$k]['product_info_bybarcode'] = $this->Api_model->product_info_bybarcode($products[$k]['product_id']);
                $products[$k]['qr_code']  = base_url('my-assets/image/qr/'.$image_name);
                $products[$k]['bar_code'] = base_url('Cbarcode/barcode_generator/'.$products[$k]['product_id']);

            }

        }

        if(!empty($products)){
            $json['response'] = array(
                'status'       => 'ok',
                'product_list' => $products,
                'total_val'    => $this->db->count_all("product_information"),
            );
        }else{
             $json['response'] = array(
                    'status'  => 'error',
                    'product_list' => [],
                    'message' => 'No Product Found',
                );
        }
            
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
            
    }

  
    public function delete_product() {
        
        $id = $this->input->get('product_id');
        if ($this->Api_model->delete_product($id)) {

            $json['response'] = [
                'status'     => 'ok',
                'message'    => 'Successfully Deleted'
            ];

        } else {
            
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'please_try_again'
            ];
        }
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function insert_product() {
        $product_id = (!empty($this->input->post('product_id'))?$this->input->post('product_id'):$this->productgenerator(8));
        

        $checkproduct = $this->db->where('product_id',$product_id)->get('product_information')->row();

        if(empty($checkproduct)){

            $supplierdata  = $this->input->post('supplierdata');
            
            $supplierproduct  = json_decode($supplierdata,true);
           
            $sup_price[] = '';
            $s_id[]    = '';
            $i=0;
                foreach($supplierproduct as $key => $value) {
                    
                    //  echo $supplierproduct[$i]['supplier_price'];
                    // print_r($value);exit();
                    $sup_price[$i]   = $supplierproduct[$i]['supplier_price'];
                    $s_id[$i]        = $supplierproduct[$i]['supplier_id'];
                    $i++;
                }

                $product_model = $this->input->post('model');
               
                $price = $this->input->post('price');
                $tax_percentage = $this->input->post('tax');
                $tax = $tax_percentage / 100;

                $tablecolumn = $this->db->list_fields('tax_collection');
                $num_column = count($tablecolumn)-4;
                $taxfield = [];

                if($num_column > 0){
                    for($i=0;$i<$num_column;$i++){
                    $taxfield[$i] = 'tax'.$i;
                    }
                    foreach ($taxfield as $key => $value) {
                    $data[$value] = (!empty($this->input->post($value))?$this->input->post($value)/100:0);
                    }
                }

            
                $data['product_id']   = $product_id;
                $data['product_name'] = $this->input->post('product_name');
                $data['category_id']  = $this->input->post('category_id');
                $data['unit']         = $this->input->post('unit');
                $data['tax']          = 0;
                $data['serial_no']    = $this->input->post('serial_no');
                $data['price']        = $price;
                $data['product_model']= $this->input->post('model');
                $data['product_details'] = $this->input->post('description');
                $data['image']        =  base_url('my-assets/image/product.png');
                $data['status']       = 1;
          
                $this->db->insert('product_information',$data);

                for ($i = 0, $n = count($s_id); $i < $n; $i++) {

                    $supplier_price = $sup_price[$i];
                    $supp_id = $s_id[$i];

                    $supp_prd = array(
                        'product_id'     => $product_id,
                        'supplier_id'    => $supp_id,
                        'supplier_price' => $supplier_price,
                        'products_model' => $this->input->post('model')
                    );

                    $this->db->insert('supplier_product', $supp_prd);
                }

                $json['response'] = [
                    'status'     => 'ok',
                    'message'    => 'Successfully Added'
                ];
        }else{

            $json['response'] = [
                'status'     => 'error',
                'message'    => 'This product already added'
            ];

        }

        echo json_encode($json,JSON_UNESCAPED_UNICODE);
        

    }


    public function productgenerator($lenth) {

        $number = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
        for ($i = 0; $i < $lenth; $i++) {
            $rand_value = rand(0, 8);
            $rand_number = $number["$rand_value"];

            if (empty($con)) {
                $con = $rand_number;
            } else {
                $con = "$con" . "$rand_number";
            }
        }

        $result =  $this->Api_model->product_id_check($con);

        if ($result === true) {
            $this->productgenerator(8);
        } else {
            return $con;
        }
    }


    public function product_editdata(){

        $id = $this->input->post('product_id');
        $productdata = $this->Api_model->product_editdata($id);
        $supplierproduct = $this->Api_model->productsupplier_editdata($id);

        if (!empty($productdata)) {
            $json['response'] = [
                'status'         => 'ok',
                'productinfo'    => $productdata,
                'productsupplier'=> $supplierproduct,
                'permission'     => 'read'
            ];
        } else {
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'please_try_again',
                'permission' => 'read'
            ];
        }

        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }



    public function Update_product() {

        $this->load->helper('file');
        $product_id       = $this->input->post('product_id');
        $supplierdata     = $this->input->post('supplierdata');
        $supplierproduct  = json_decode($supplierdata,true);
        $sup_price[] = '';
        $s_id[]    = '';
        $i=0;
        foreach ($supplierproduct as $key => $value) {
             $sup_price[$i]   = $supplierproduct[$i]['supplier_price'];
              $s_id[$i]       = $supplierproduct[$i]['supplier_id'];
        $i++;}

        $product_model  = $this->input->post('model');
        $price          = $this->input->post('price');
        $tax_percentage = $this->input->post('tax');
        $tax = $tax_percentage / 100;

        $tablecolumn = $this->db->list_fields('tax_collection');
        $num_column = count($tablecolumn)-4;
            if($num_column > 0){
                $taxfield = [];
                for($i=0;$i<$num_column;$i++){
                $taxfield[$i] = 'tax'.$i;
                }
                foreach ($taxfield as $key => $value) {
                $data[$value] = $this->input->post($value)/100;
                }
            }

            $data['product_id']   = $product_id;
            $data['product_name'] = $this->input->post('product_name');
            $data['category_id']  = $this->input->post('category_id');
            $data['unit']         = $this->input->post('unit');
            $data['tax']          = 0;
            $data['serial_no']    = $this->input->post('serial_no');
            $data['price']        = $price;
            $data['product_model']= $this->input->post('model');
            $data['product_details'] = $this->input->post('description');
            $data['image']        =  base_url('my-assets/image/product.png');
            $data['status']       = 1;
      
       
            $this->db->where('product_id', $product_id);
            $this->db->update('product_information',$data);

            $this->db->where('product_id',$product_id)
            ->delete('supplier_product');

            for ($i = 0, $n = count($s_id); $i < $n; $i++) {
                $supplier_price = $sup_price[$i];
                $supp_id = $s_id[$i];

                $supp_prd = array(
                    'product_id'     => $product_id,
                    'supplier_id'    => $supp_id,
                    'supplier_price' => $supplier_price,
                    'products_model' => $this->input->post('model')
                );

                $this->db->insert('supplier_product', $supp_prd);
            }
                $json['response'] = [
                     'status'     => 'ok',
                     'message'    => 'Successfully Updated',
                     'permission' => 'write'
                ];
           
        echo json_encode($json,JSON_UNESCAPED_UNICODE);

    }



    public function retrieve_product_data() {

        $product_id = $this->input->get('product_id');
        $product_info = $this->Api_model->get_total_product($product_id);
        $json['response'] = [
            'status'       => 'ok',
            'product_data' => $product_info
        ];
       echo json_encode($json,JSON_UNESCAPED_UNICODE);

    }
    
    public function category_list() {
        $start=$this->input->get('start', TRUE);   
        if($start==0){
          $category_list = $this->Api_model->category_list($limit=15,$start);
        }else{
            $category_list = $this->Api_model->category_list($limit=15,$start);
        } 
        if(!empty($category_list)){

            $json['response'] = [
                    'status'     => 'ok',
                    'categories' => $category_list,
                    'total_val'  => $this->db->count_all('product_category'),
            ];

        }else{

            $json['response'] = [
                'status'     => 'error',
                'message'    => 'No Record found'
            ]; 

        }

        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function insert_category(){

        $checkC = $this->db->where('category_name',$this->input->get('category_name'))->get('product_category')->row();

        if(empty($checkC)){
            $data = array(
                'category_name' => $this->input->get('category_name'),
                'status' => 1
            );

            if ($this->Api_model->category_create($data)) { 
                $json['response'] = [
                     'status'      => 'ok',
                     'message'     => 'Successfully Added'
                ];
            } else {
                $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'Please try again'
                ]; 
            }
        }else{
            $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'This category already exist'
            ]; 
        }

        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }

    
    public function category_edit() {

        $id = $this->input->get('id');
        $categorydata = $this->Api_model->category_edit_data($id);

        if(!empty($categorydata)){
            $json['response'] = [
                'status'     => 'ok',
                'categories' => $categorydata,
                'permission' => 'write'
            ];
        }else{
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'please_try_again',
                'permission' => 'write'
            ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }

    public function update_category(){

            $category_id = $this->input->get('id');
            $data = array(
                'category_id'   => $category_id,
                'category_name' => $this->input->get('category_name'),
                'status'        => 1
            );

            if ($this->Api_model->update_category($data)) { 
                    $json['response'] = [
                         'status'     => 'ok',
                         'message'    => 'Successfully Updated',
                         'permission' => 'write'
                    ];
            } else {
                $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'Please try again',
                    'permission' => 'read'
                ]; 
            }

         echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }

  
    public function delete_category(){

        $id = $this->input->get('id');
        if ($this->Api_model->delete_category($id)) {
            $json['response'] = [
                'status'     => 'ok',
                'message'    => 'Successfully Deleted',
                'permission' => 'read'
            ];
        } else {

            $json['response'] = [
                'status'     => 'error',
                'message'    => 'please_try_again',
                'permission' => 'read'
            ];
        }

        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }
 


    public function customer_list() {

        $start=$this->input->get('start', TRUE);   
        if($start == 0){
            $customer_list = $this->Api_model->customer_list($limit=15,$start);
        }

        if($start > 0){
            $customer_list = $this->Api_model->customer_list($limit=15,$start);
        }

        if($start  == ''){
            $customer_list = $this->Api_model->total_customer();
        }


        if (!empty($customer_list)) {
            $json['response'] = [
                    'status'     => 'ok',
                   'customers'   => $customer_list,
                   'total_val'   => $this->db->count_all("customer_information"),
                    'csrf_test_name' =>$this->security->get_csrf_hash(),
                    'permission' => 'read'
            ];
        } else {
           $json['response'] = [
                'status'     => 'error',
                'message'    => 'No Data Available',
                 'customers'   => [],
                 'csrf_test_name' =>$this->security->get_csrf_hash(),
                'permission' => 'read'
            ];
        }
        echo json_encode($json,JSON_UNESCAPED_UNICODE);

    }


    public function customer_search() {

        $customer_data = $this->input->get('search');
        $customer_list = $this->Api_model->searchcustomer_list($customer_data);

        if (!empty($customer_list)) {
            $json['response'] = [
                'status'     => 'ok',
                'customers' => $customer_list,
                'permission' => 'read'
            ];
        } else {
            $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No Data Available',
                    'customers'  => [],
                    'permission' => 'read'
            ];
        }

        echo json_encode($json,JSON_UNESCAPED_UNICODE);

    }


    public function insert_customer(){
       
        $data = array(
            'customer_name'    => $this->input->get('customer_name'),
            'customer_address' => $this->input->get('address'),
            'customer_mobile'  => $this->input->get('mobile'),
            'customer_email'   => $this->input->get('email'),
            'status'           => 1
        );

        $checkC = $this->db->where('customer_mobile',$this->input->get('mobile'))->get('customer_information')->row();
        if(empty($checkC)){


            if ($this->Api_model->customer_create($data)) { 

                $customer_id = $this->db->insert_id();
                $vouchar_no = $this->occational->generator(10);
                //Customer  basic information adding.
                $coa = $this->Api_model->customerheadcode();
                if($coa->HeadCode!=NULL){
                    $headcode=$coa->HeadCode+1;
                }else{
                    $headcode="102030000001";
                }
                $c_acc=$customer_id.'-'.$this->input->get('customer_name');
                $createby=1;
                $createdate=date('Y-m-d H:i:s');

                    $customer_coa = [
                        'HeadCode'         => $headcode,
                        'HeadName'         => $c_acc,
                        'PHeadName'        => 'Customer Receivable',
                        'HeadLevel'        => '4',
                        'IsActive'         => '1',
                        'IsTransaction'    => '1',
                        'IsGL'             => '0',
                        'customer_id'      => $customer_id,
                        'HeadType'         => 'A',
                        'IsBudget'         => '0',
                        'IsDepreciation'   => '0',
                        'DepreciationRate' => '0',
                        'CreateBy'         => $createby,
                        'CreateDate'       => $createdate,
                    ];

                    $this->db->insert('acc_coa',$customer_coa);
                     $this->Api_model->customer_previous_balance_add($this->input->get('previous_balance'), $customer_id);
                    
                    $json['response'] = [
                        'status'     => 'ok',
                        'message'    => 'Successfully Added',
                        'permission' => 'write'
                    ];

            } else {

                $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'Please try again',
                    'permission' => 'read'
                ];

            }

        }else{
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'This customer already exist'
            ];
        }

        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }



    public function credit_customers(){

        $start=$this->input->get('start', TRUE);       
        if($start==0){
            $credit_customers = $this->Api_model->credit_customer_list($limit=15,$start);
        }else{
            $credit_customers = $this->Api_model->credit_customer_list($limit=15,$start);
        }
        $total_creditcustomer = $this->Api_model->countcredit_customer_list();
        if (!empty($credit_customers)) {
            $json['response'] = [
                'status'     => 'ok',
                'customers'  => $credit_customers,
                'total_val'  => $total_creditcustomer,
                'permission' => 'read'
            ];
        } else {
           $json['response'] = [
                'status'     => 'error',
                'message'    => 'No Record Found',
                'customers'  => [],
                'permission' => 'read'
            ];
        }
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function paid_customers(){

        $start=$this->input->get('start', TRUE);   

        if($start==0){
            $paid_customer_list = $this->Api_model->paid_customer_list($limit=15,$start);
        }else{
            $paid_customer_list = $this->Api_model->paid_customer_list($limit=15,$start);
        }

        $total_paid_customer = $this->Api_model->countpaid_customer_list();
        if (!empty($paid_customer_list)) {
            $json['response'] = [
                'status'     => 'ok',
                'customers'  => $paid_customer_list,
                'toal_val'   => $total_paid_customer,
                'permission' => 'read'
            ];
        } else {
            $json['response'] = [
                'status'     => 'error',
                'customers'  => [],
                'message'    => 'No Record Found',
                'permission' => 'read'
            ];
        }
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }

    public function delete_customer(){

        $id = $this->input->get('id');
        if ($this->Api_model->delete_customer($id)) {
            $json['response'] = [
                'status'     => 'ok',
                'message'    => 'Successfully Deleted',
                'permission' => 'read'
            ];
        } else {
            $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'please_try_again',
                    'permission' => 'read'
            ];
        }
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function customer_edit() {

        $id = $this->input->get('id');
        $customerdata = $this->Api_model->customer_edit_data($id);
        if(!empty($customerdata)){
            $json['response'] = [
                    'status'     => 'ok',
                    'customers'  => $customerdata,
                    'permission' => 'write'
            ];
        }else{
           $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'Find Not any data',
                    'permission' => 'read'
            ];
        }
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function customer_update() {
            $customer_id = $this->input->get('customer_id');
            $old_headnam = $customer_id.'-'.$this->input->get('oldname');
            $c_acc=$customer_id.'-'.$this->input->get('customer_name');
            $data = array(
                'customer_id'      => $customer_id,
                'customer_name'    => $this->input->get('customer_name'),
                'customer_address' => $this->input->get('address'),
                'customer_mobile'  => $this->input->get('mobile'),
                'customer_email'   => $this->input->get('email'),
                'status'           => 2
            );
            $customer_coa = [
                'HeadName'         => $c_acc
            ];
            $result = $this->Api_model->update_customer($data, $customer_id);

            if ($result == TRUE) {

                $this->db->where('HeadName', $old_headnam);
                $this->db->update('acc_coa', $customer_coa);
                $json['response'] = [
                    'status'     => 'ok',
                    'message'    => 'Successfully Updated',
                    'permission' => 'read'
                ];

            }else{
                $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'Please Try Again',
                    'permission' => 'read'
                ];
            }
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function supplier_list() {
        $start=$this->input->get('start', TRUE);

        if($start==0){
          $supplier_list = $this->Api_model->supplier_list($limit=15,$start);
        }else{
            $supplier_list = $this->Api_model->supplier_list($limit=15,$start);
        }



        if(!empty($supplier_list)){
           $json['response'] = [
                    'status'    => 'ok',
                    'suppliers' => $supplier_list,
                    'total_val' => $this->db->count_all("supplier_information"),
            ];
        }else{
            $json['response'] = [
                    'status'     => 'error',
                    'suppliers'  => [],
                    'message'    => 'No Record Found'
            ];  
        }

        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function insert_supplier() {
        $checkU = $this->db->where('mobile',$this->input->get('mobile'))->get('supplier_information')->row();

        if(empty($checkU)){

            $data = array(
                'supplier_name' => $this->input->get('supplier_name'),
                'address'       => $this->input->get('address'),
                'mobile'        => $this->input->get('mobile'),
                'details'       => $this->input->get('details'),
                'status'        => 1
            );
            

            $this->db->insert('supplier_information',$data);
            $supplier_id = $this->db->insert_id();
            $coa = $this->supplierheadcode();

            if($coa->HeadCode!=NULL){
                $headcode=$coa->HeadCode+1;
            }
            else{
                $headcode="502000001";
            }
            $c_acc=$supplier_id.'-'.$this->input->get('supplier_name');
            $createby=1;
            $createdate=date('Y-m-d H:i:s');
            
            $supplier_coa = [
                'HeadCode'         => $headcode,
                'HeadName'         => $c_acc,
                'PHeadName'        => 'Account Payable',
                'HeadLevel'        => '3',
                'IsActive'         => '1',
                'IsTransaction'    => '1',
                'IsGL'             => '0',
                'supplier_id'      => $supplier_id,
                'HeadType'         => 'L',
                'IsBudget'         => '0',
                'IsDepreciation'   => '0',
                'DepreciationRate' => '0',
                'CreateBy'         => 1,
                'CreateDate'       => $createdate,
            ];
            $supplier = TRUE;
            if ($supplier == TRUE) {

                //Previous balance adding -> Sending to supplier model to adjust the data.
                $this->db->insert('acc_coa',$supplier_coa);

                if(!empty($this->input->get('previous_balance'))){
                    
                    $this->Api_model->previous_balance_add($this->input->get('previous_balance'), $supplier_id,$c_acc,$this->input->get('supplier_name'));
                }
                
                $json['response'] = [
                    'status'     => 'ok',
                    'message'    => 'Successfully Added',
                    'permission' => 'write'
                ];

            } else {
                $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'Please try again',
                    'permission' => 'read'
                ];
            }

        }else{
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'This supplier already exist'
            ];
        }

        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function supplierheadcode(){

        $query=$this->db->query("SELECT MAX(HeadCode) as HeadCode FROM acc_coa WHERE HeadLevel='3' And HeadCode LIKE '50200%'");
        return $query->row();

    }


    public function delete_supplier(){
  
        $id = $this->input->get('id');

        if ($this->Api_model->delete_supplier($id)) {

            $json['response'] = [
                'status'     => 'ok',
                'message'    => 'Successfully Deleted'
            ];

        } else {
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'please_try_again'
            ];
        }
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function supplier_edit() {
        $id = $this->input->get('id');

        $supplierdata = $this->Api_model->supplier_edit_data($id);
        if(!empty($supplierdata)){
                $json['response'] = [
                    'status'     => 'ok',
                    'categories' => $supplierdata,
                    'permission' => 'write'
                ];
        }else{
                $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No data found',
                    'permission' => 'write'
                ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function supplier_update() {
        $supplier_id = $this->input->get('supplier_id');
        $old_headnam = $supplier_id.'-'.$this->input->get('oldname');
        $c_acc=$supplier_id.'-'.$this->input->get('supplier_name');
        
        $data = array(
            'supplier_name' => $this->input->get('supplier_name'),
            'address'       => $this->input->get('address'),
            'mobile'        => $this->input->get('mobile'),
            'details'       => $this->input->get('details')
        );
        $supplier_coa = [
             'HeadName'         => $c_acc
        ];
        $result = $this->Api_model->update_supplier($data, $supplier_id);
        if ($result == TRUE) {
            $this->db->where('HeadName', $old_headnam);
            $this->db->update('acc_coa', $supplier_coa);
                $json['response'] = [
                    'status'     => 'ok',
                    'message'    => 'Successfully Updated',
                    'permission' => 'read'
                ];
        }else{
                    $json['response'] = [
                        'status'     => 'error',
                        'message'    => 'Please Try Again',
                        'permission' => 'read'
                    ];
        }

        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function insert_unit() {

        $unit_id = $this->occational->generator(15);

        $data = array(
            'unit_id'   => $unit_id,
            'unit_name' => $this->input->get('unit_name'),
            'status'    => 1
        );
        $result = $this->Api_model->insert_unit($data);

        if ($result == TRUE) {
            $json['response'] = [
                    'status'     => 'ok',
                    'message'    => 'Successfully Inserted',
                    'permission' => 'write'
                ];
        } else {
           $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'Already Inserted',
                    'permission' => 'read'
                ];
           
        }

        echo json_encode($json,JSON_UNESCAPED_UNICODE);   
    }



    public function unit_list() {

            $start=$this->input->get('start', TRUE);       
            if($start==0){
                $unit_list = $this->Api_model->unit_list($limit=15,$start);
            }else{
                $unit_list = $this->Api_model->unit_list($limit=15,$start);
            }

            if(!empty($unit_list)){
                $json['response'] = [
                    'status'    => 'ok',
                    'units'    => $unit_list,
                    'total_val'=> $this->db->count_all('units'),
                ];   
            }else{
                $json['response'] = [
                        'status'     => 'error',
                        'units'      => [],
                        'message'    => 'No record found',
                        'permission' => 'read'
                ];
            }
            
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }



    public function unit_edit() {
        
        $id = $this->input->get('id');

        $unitdata = $this->Api_model->unit_edit_data($id);
        if(!empty($unitdata)){
          $json['response'] = [
                    'status'     => 'ok',
                    'units'      => $unitdata,
                    'permission' => 'write'
                ];
        }else{
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'No data found',
                'permission' => 'write'
            ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function delete_unit(){
         
        $id = $this->input->get('id');
        if ($this->Api_model->delete_unit($id)) {
            $json['response'] = [
                    'status'     => 'ok',
                    'message'    => 'Successfully Deleted',
                    'permission' => 'read'
                ];
        } else {
           $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'please_try_again',
                    'permission' => 'read'
                ];
        }
         echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }



    public function update_unit(){

        $unit_id = $this->input->get('id');    

            $data = array(
                'unit_id'   => $unit_id,
                'unit_name' => $this->input->get('unit_name')
            );

                if ($this->Api_model->update_unit($data)) { 
                    $json['response'] = [
                         'status'     => 'ok',
                         'message'    => 'Successfully Updated',
                         'permission' => 'write'
                    ];
                } else {
                    $json['response'] = [
                        'status'     => 'error',
                        'message'    => 'Please try again',
                        'permission' => 'read'
                    ]; 
                }

         echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function insert_supplier_advance(){
        $advance_type = $this->input->get('type');
        
        if($advance_type ==1){
            $dr = $this->input->get('amount');
            $tp = 'd';
        }else{
            $cr = $this->input->get('amount');
            $tp = 'c';
        }

        $createby=$this->input->get('createby');
        $createdate     = date('Y-m-d H:i:s');
        $transaction_id = $this->occational->generator(10);
        $supplier_id    = $this->input->get('supplier_id');
        $supifo         = $this->db->select('*')->from('supplier_information')->where('supplier_id',$supplier_id)->get()->row();
        $headn          = $supplier_id.'-'.$supifo->supplier_name;
        $coainfo        = $this->db->select('*')->from('acc_coa')->where('HeadName',$headn)->get()->row();
        $supplier_headcode = $coainfo->HeadCode;
           

           

        $supplier_accledger = array(
              'VNo'            =>  $transaction_id,
              'Vtype'          =>  'Advance',
              'VDate'          =>  date("Y-m-d"),
              'COAID'          =>  $supplier_headcode,
              'Narration'      =>  'supplier Advance For '.$supifo->supplier_name,
              'Debit'          =>  (!empty($dr)?$dr:0),
              'Credit'         =>  (!empty($cr)?$cr:0),
              'IsPosted'       =>  1,
              'CreateBy'       =>  $createby,
              'CreateDate'     =>  date('Y-m-d H:i:s'),
              'IsAppove'       =>  1
        );

        $cc = array(
              'VNo'            =>  $transaction_id,
              'Vtype'          =>  'Advance',
              'VDate'          =>  date("Y-m-d"),
              'COAID'          =>  1020101,
              'Narration'      =>  'Cash in Hand  For '.$supifo->supplier_name.' Advance',
              'Debit'          =>  (!empty($dr)?$dr:0),
              'Credit'         =>  (!empty($cr)?$cr:0),
              'IsPosted'       =>  1,
              'CreateBy'       =>  $createby,
              'CreateDate'     =>  date('Y-m-d H:i:s'),
              'IsAppove'       =>  1
        ); 
              

        if ($this->Api_model->supplier_advance_insert($supplier_accledger)) { 
            $this->db->insert('acc_transaction',$cc);

                $json['response'] = [
                     'status'     => 'ok',
                     'message'    => 'Successfully Inserted',
                     'permission' => 'write'
                ];

        } else {

            $json['response'] = [
                'status'     => 'error',
                'message'    => 'Please try again',
                'permission' => 'read'
            ]; 

        }

        echo json_encode($json,JSON_UNESCAPED_UNICODE);

    }


    public function supplier_ledger(){

        $start = $this->input->get('from_date');
        $end = $this->input->get('to_date');
        $supplier_id = $this->input->get('supplier_id');     
        $limit_start=$this->input->get('start', TRUE);

        if($limit_start==0){
          $ledger = $this->Api_model->suppliers_ledger($supplier_id,$start,$end,$limit=15,$limit_start);
        }else{
            $ledger = $this->Api_model->suppliers_ledger($supplier_id,$start,$end,$limit=15,$limit_start);
        }


        if(!empty($ledger)){
            $json['response'] = [
                'status'     => 'ok',
                'ledgers'    => $ledger,
                'permission' => 'write'
            ];
        }else{
            $json['response'] = [
                'status'     => 'error',
                'ledgers'    => [],
                'message'    => 'No Record Found',
                'permission' => 'read'
            ]; 

        }
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function supplier_search() {

        $searchitem   = $this->input->get('search');
        $searchresult = $this->Api_model->supplier_seach($searchitem);
        if($searchresult){
            $json['response'] = [
            'status'     => 'ok',
            'suppliers'  => $searchresult
        ];
        }else{
          $json['response'] = [
            'status'     => 'error',
            'suppliers'  => []
        ];  
        }
        

        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }




    public function product_stock(){

        $start=$this->input->get('start', TRUE); 
        if($start==0){
            $stok_report = $this->Api_model->product_stock($limit=15,$start);
        }else{
            $stok_report = $this->Api_model->product_stock($limit=15,$start);
        }

        if (!empty($stok_report)) {
            $sub_total_in = 0;
            $sub_total_out = 0;
            $sub_total_stock = 0;
            $i = 0;
            foreach ($stok_report as $k => $v) {
                $i++;
                $stok_report[$k]['sl'] = $i;
                $stok_report[$k]['stock_qty'] = ($stok_report[$k]['totalPurchaseQnty'] - $stok_report[$k]['totalSalesQnty']);
                $stok_report[$k]['SubTotalOut'] = ($sub_total_out + $stok_report[$k]['totalSalesQnty']);
                $sub_total_out = $stok_report[$k]['SubTotalOut'];
                $stok_report[$k]['SubTotalIn'] = ($sub_total_in + $stok_report[$k]['totalPurchaseQnty']);
                $sub_total_in = $stok_report[$k]['SubTotalIn'];
                 $stok_report[$k]['total_sale_price'] = $stok_report[$k]['stock_qty'] * $stok_report[$k]['price'];
                $stok_report[$k]['SubTotalStock'] = ($sub_total_stock + $stok_report[$k]['stock_qty']);
                $sub_total_stock = $stok_report[$k]['SubTotalStock'];
            }
        }

        if (!empty($stok_report)) {
            $json['response'] = [
                'status'     => 'ok',
                'stock'      => $stok_report,
                'total_val'  => $this->db->count_all('product_information'),
                'permission' => 'read'
            ];
        }else{
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'No Record Found',
                'permission' => 'read'
            ]; 
        }
         echo json_encode($json,JSON_UNESCAPED_UNICODE);

    }


    public function stock_report_supplier_wise() {

        $supplier_id    = $this->input->get('supplier_id');
        $stok_report    = $this->Api_model->supplier_wise_stock($supplier_id);
       

        if (!empty($stok_report)) {
            $json['response'] = [
                 'status'     => 'ok',
                 'stock'      => $stok_report,
                 'permission' => 'read'
            ];
        }else{
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'No Record Found',
                'permission' => 'read'
            ]; 
        }

        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    
    }


    public function stock_product_wise() {

        $product_id  = $this->input->get('product_id');
        $stok_report    = $this->Api_model->stock_report_product($product_id);
        $sub_total_in = 0;
        $sub_total_out = 0;
        $sub_total_stock = 0;
        $i=0;
            foreach ($stok_report as $k => $v) {
                $i++;
                $stok_report[$k]['sl'] = $i;
                $stok_report[$k]['stock_qty'] = ($stok_report[$k]['totalPurchaseQnty'] - $stok_report[$k]['totalSalesQnty']);
                $stok_report[$k]['SubTotalOut'] = ($sub_total_out + $stok_report[$k]['totalSalesQnty']);
                $sub_total_out = $stok_report[$k]['SubTotalOut'];
                $stok_report[$k]['SubTotalIn'] = ($sub_total_in + $stok_report[$k]['totalPurchaseQnty']);
                $sub_total_in = $stok_report[$k]['SubTotalIn'];
                 $stok_report[$k]['total_sale_price'] = $stok_report[$k]['stock_qty'] * $stok_report[$k]['price'];
                $stok_report[$k]['SubTotalStock'] = ($sub_total_stock + $stok_report[$k]['stock_qty']);
                $sub_total_stock = $stok_report[$k]['SubTotalStock'];
            }
        if (!empty($stok_report)) {
            $json['response'] = [
                'status'     => 'ok',
                'stock'      => $stok_report,
                'permission' => 'read'
            ];
        }else{
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'No Record Found',
                'permission' => 'read'
            ]; 
        }
        echo json_encode($json,JSON_UNESCAPED_UNICODE);

    }


    public function productinfo_by_barcode(){
     
        $product_id  = $this->input->get('product_id');

        $product_data = $this->Api_model->product_info_bybarcode($product_id);
        
        if (!empty($product_data)) {
            $json['response'] = [
                    'status'        => 'ok',
                    'product_data'  => $product_data
            ];

        } else {
           $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'Product Not found'
            ];
        }
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    
    }
   
    public function tax_fields(){

        $taxfields = $this->Api_model->taxfield();

        if (!empty($taxfields)) {
            $json['response'] = [
                'status'     => 'ok',
                'taxfields'  => $taxfields,
                'permission' => 'create'
            ];

        } else {

            $json['response'] = [
                'status'     => 'error',
                'message'    => 'No field Available',
                'permission' => 'read'
            ];
        }
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }



    public function insert_sale(){
            $invoice_id = date('YmdHis');
            $invoice_id = strtoupper($invoice_id);
            $createby   = $this->input->get('createby');
            $createdate = date('Y-m-d H:i:s');
            $detailsinfo= $this->input->get('detailsinfo');
            $saledetails= json_decode($detailsinfo,true);
            $products[] = '';
            $quant[]    = '';
            $rate[]     = '';
            $total[]    = '';
            $serialn[]  = '';
            $i=0;
            foreach ($saledetails as $key => $value) {
                $products[$i]   = $saledetails[$i]['product_id'];
                $quant[$i]      = $saledetails[$i]['product_quantity'];
                $rate[$i]       = $saledetails[$i]['product_rate'];
                $serialn[$i]    = $saledetails[$i]['serial_no'];

            $i++;}

            $product_id   = $products;
            $quantity     = $quant;
            $prrate       = $rate;
            $serial_no    = $serialn;
            $totalamount  = $total;
            
        
            $customer_id = $this->input->get('customer_id');
            $transection_id = $this->occational->generator(15);

            // Account table info
            $transactiondata = array(
                'transaction_id'      => $transection_id,
                'relation_id'         => $customer_id,
                'transection_type'    => 2,
                'date_of_transection' => (!empty($this->input->get('invoice_date'))?$this->input->get('invoice_date'):date('Y-m-d')),
                'transection_category'=> 2,
                'amount'              => $this->input->get('paid_amount'),
                'transection_mood'    => 1,
                'is_transaction'      => 0,
                'description'         => 'Paid by customer'
            );




            //Data inserting into invoice table
            $datainv = array(
                'invoice_id'      => $invoice_id,
                'customer_id'     => $customer_id,
                'date'            => (!empty($this->input->get('invoice_date'))?$this->input->get('invoice_date'):date('Y-m-d')),
                'total_amount'    => $this->input->get('grand_total_price')-$this->input->get('total_discount'),
                'total_tax'       => $this->input->get('total_tax'),
                'invoice'         => $this->invoice_generator(),
                'invoice_details' => (!empty($this->input->get('inva_details'))?$this->input->get('inva_details'):'text'),
                'invoice_discount'=> 0,
                'total_discount'  => $this->input->get('total_discount'),
                'prevous_due'     => 0,
                'shipping_cost'   => 0,
                'sales_by'        => $this->input->get('createby'),
                'status'          => 1,
                'payment_type'    => 1,
                'bank_id'         => null,
            );
            

      
                 
            $this->db->insert('invoice', $datainv);

            $prinfo  = $this->db->select('product_id,Avg(rate) as product_rate')->from('product_purchase_details')->where_in('product_id',$product_id)->group_by('product_id')->get()->result(); 
            $purchase_ave = [];
            $i=0;
            foreach ($prinfo as $avg) {
              $purchase_ave [] =  $avg->product_rate*$quantity[$i];
              $i++;
            }
            $sumval = array_sum($purchase_ave);

                $cusifo = $this->db->select('*')->from('customer_information')->where('customer_id',$customer_id)->get()->row();
                $headn = $customer_id.'-'.$cusifo->customer_name;
                $coainfo = $this->db->select('*')->from('acc_coa')->where('HeadName',$headn)->get()->row();
                $customer_headcode = $coainfo->HeadCode;
                // Cash in Hand debit
                $cc = array(
                  'VNo'            =>  $invoice_id,
                  'Vtype'          =>  'INV',
                  'VDate'          =>  $createdate,
                  'COAID'          =>  1020101,
                  'Narration'      =>  'Cash in Hand in Sale for '.$cusifo->customer_name,
                  'Debit'          =>  $this->input->get('paid_amount'),
                  'Credit'         =>  0,
                  'IsPosted'       =>  1,
                  'CreateBy'       =>  $createby,
                  'CreateDate'     =>  $createdate,
                  'IsAppove'       =>  1
                ); 
                 

           ///Inventory credit
            $coscr = array(
              'VNo'            =>  $invoice_id,
              'Vtype'          =>  'INV',
              'VDate'          =>  $createdate,
              'COAID'          =>  10107,
              'Narration'      =>  'Inventory credit For Invoice No'.$invoice_id,
              'Debit'          =>  0,
              'Credit'         =>  $sumval,//purchase price asbe
              'IsPosted'       => 1,
              'CreateBy'       => $createby,
              'CreateDate'     => $createdate,
              'IsAppove'       => 1
            ); 
            $this->db->insert('acc_transaction',$coscr);
           
            // Customer Transactions
            //Customer debit for Product Value
            $customer_debit = array(
              'VNo'            =>  $invoice_id,
              'Vtype'          =>  'INV',
              'VDate'          =>  $createdate,
              'COAID'          =>  $customer_headcode, //$customer_headcode,
              'Narration'      =>  'Customer debit For  '.$cusifo->customer_name,
              'Debit'          =>  $this->input->get('grand_total_price')-$this->input->get('total_discount'),
              'Credit'         =>  0,
              'IsPosted'       => 1,
              'CreateBy'       => $createby,
              'CreateDate'     => $createdate,
              'IsAppove'       => 1
            );  

            $this->db->insert('acc_transaction',$customer_debit);
            
        $total_saleamnt = $this->input->get('grand_total_price',TRUE)-(!empty($this->input->get('total_discount',TRUE))?$this->input->get('total_discount',TRUE):0);
  $withoutinventory = $total_saleamnt - $sumval;
  $income = $withoutinventory - $this->input->get('total_tax',TRUE);

            $pro_sale_income = array(
              'VNo'            => $invoice_id,
              'Vtype'          => 'INVOICE',
              'VDate'          => $createdate,
              'COAID'          => 303,
              'Narration'      => 'Sale Income For '.$cusifo->customer_name,
              'Debit'          => 0,
              'Credit'         => $income,
              'IsPosted'       => 1,
              'CreateBy'       => $createby,
              'CreateDate'     => $createdate,
              'IsAppove'       => 1
            ); 
            $this->db->insert('acc_transaction',$pro_sale_income);
               $tax_info = array(
              'VNo'            => $invoice_id,
              'Vtype'          => 'INVOICE',
              'VDate'          => $createdate,
              'COAID'          => 50203,
              'Narration'      => 'Tax from sale invoice id-'.$invoice_id,
              'Debit'          => $this->input->get('total_tax',TRUE),
              'Credit'         => 0,
              'IsPosted'       => 1,
              'CreateBy'       => $createby,
              'CreateDate'     => $createdate,
              'IsAppove'       => 1
               ); 
       $this->db->insert('acc_transaction',$tax_info);

           ///Customer credit for Paid Amount
            $cuscredit = array(
              'VNo'            => $invoice_id,
              'Vtype'          => 'INV',
              'VDate'          => $createdate,
              'COAID'          => $customer_headcode,
              'Narration'      => 'Customer credit for Paid Amount For Customer '.$cusifo->customer_name,
              'Debit'          => 0,
              'Credit'         => $this->input->get('paid_amount'),
              'IsPosted'       => 1,
              'CreateBy'       => $createby,
              'CreateDate'     => $createdate,
              'IsAppove'       => 1
            ); 

            if(!empty($this->input->get('paid_amount'))){
                $this->db->insert('acc_transaction',$cuscredit);
                $this->db->insert('acc_transaction',$cc);
                 
            }
            $customerinfo = $this->db->select('*')->from('customer_information')->where('customer_id',$customer_id)->get()->row();
            $p_id                = $product_id;
            $total_amount        = $totalamount;
            $discount_rate       = 0;
            $discount_per        = 0;
            $tax_amount          = 0;
            $invoice_description = '';
            $serial_n            = $serial_no;

       
            for ($i = 0, $n = count($p_id); $i < $n; $i++) {
                $product_quantity  = $quantity[$i];
                $product_rate      = $prrate[$i];
                $product_id        = $p_id[$i];
                $serial_no         = (!empty($serial_n[$i])?$serial_n[$i]:null);
                $total_price       = $product_rate*$product_quantity;
                $supplier_rate     = $this->supplier_rate($product_id);
                $disper            = $discount_per[$i];
                $discount          = is_numeric($product_quantity) * is_numeric($product_rate) * is_numeric($disper) / 100;
                $tax               = $tax_amount[$i];
            
               
                $invdetails = array(
                'invoice_details_id' => $this->generator(15),
                'invoice_id'         => $invoice_id,
                'product_id'         => $product_id,
                'serial_no'          => $serial_no,
                'quantity'           => $product_quantity,
                'rate'               => $product_rate,
                'discount'           => '',
                'description'        => '',
                'discount_per'       => '',
                'tax'                => 0,
                'paid_amount'        => $this->input->get('paid_amount'),
                'due_amount'         => $this->input->get('due_amount'),
                'supplier_rate'      => $supplier_rate[0]['supplier_price'],
                'total_price'        => $total_price,
                'status'             => 1
                );
                // print_r($invdetails);exit();
                $this->db->insert('invoice_details', $invdetails);
            }

            $message = 'Mr.'.$customerinfo->customer_name.',
            '.'You have purchase  '.$this->input->get('grand_total_price').' You have paid .'.$this->input->get('paid_amount');
               $config_data = $this->db->select('*')->from('sms_settings')->get()->row();
        if($config_data->isinvoice == 1){
          $this->smsgateway->send([
            'apiProvider' => 'nexmo',
            'username'    => $config_data->api_key,
            'password'    => $config_data->api_secret,
            'from'        => $config_data->from,
            'to'          => $customerinfo->customer_mobile,
            'message'     => $message
        ]);
      }
           
            $message_sent = true ; 
             if($message_sent == true){
                  $json['response'] = [
                             'status'     => 'ok',
                             'message'    => 'Successfully Added',
                             'permission' => 'write'
                        ];
             }else{
                    $json['response'] = [
                             'status'     => 'error',
                             'message'    => 'Please Try Again',
                             'permission' => 'read'
                        ];
            }

            echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }





    public function supplier_rate($product_id) {

        $this->db->select('supplier_price');
        $this->db->from('supplier_product');
        $this->db->where(array('product_id' => $product_id));
        $query = $this->db->get();
        return $query->result_array();
    }    


    public function sale_list(){

        $start=$this->input->get('start', TRUE);       
        if($start==0){
          $salelist = $this->Api_model->invoice_list($limit=15,$start);
        }else{
            $salelist = $this->Api_model->invoice_list($limit=15,$start);
        }
        if(!empty($salelist)){
            $json['response'] = array(
                'status'    => 'ok',
                'sale_list' => $salelist,
                'total_val' => $this->db->count_all('invoice'),
            );
        }else{
            $json['response'] = array(
                'status'    => 'error',
                'sale_list' =>[],
                'message'   => 'No Record Found',
            );
        }
            
        echo json_encode($json,JSON_UNESCAPED_UNICODE);  
    }




    public function insert_purchase() {

        $result = $this->Api_model->purchase_entry();

        if ($result == true) {
            $json['response'] = [
                    'status'     => 'ok',
                    'message'    => 'Successfully Inserted',
                    'permission' => 'create'
                ];

        } else {
           $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'Please Try Again',
                    'permission' => 'read'
                ];
        }
        echo json_encode($json,JSON_UNESCAPED_UNICODE);

    }


    
    public function purchase_list(){

        $start=$this->input->get('start', TRUE);

        if($start==0){
          $result = $this->Api_model->purchase_list($limit=15,$start);
        }else{
            $result = $this->Api_model->purchase_list($limit=15,$start);
        }
        if (!empty($result)) {
                $json['response'] = [
                        'status'        => 'ok',
                        'purchase_list' => $result,
                        'total_val'     => $this->db->count_all('product_purchase'),
                        'permission'    => 'read'
                ];
        } else {
            $json['response'] = [
                'status'        => 'error',
                'purchase_list' => [],
                'message'       => 'No Data Available',
                'permission'    => 'read'
            ];
        }
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function search_purchase_list(){

        $startdate = $this->input->get('from_date');
        $enddate = $this->input->get('to_date');
        $invoicno = $this->input->get('invoice_no');

        if(!empty($invoicno)){
            $result = $this->Api_model->search_purchase_list_byinvoice($invoicno);
        }else{
           $result = $this->Api_model->search_purchase_list($startdate,$enddate); 
        }
             
        if (!empty($result)) {
            $json['response'] = [
                'status'        => 'ok',
                'purchase_list' => $result,
                'permission'    => 'read'
            ];
        } else {
            $json['response'] = [
                'status'        => 'error',
                'message'       => 'No Data Available',
                'purchase_list' => [],
                'permission'   => 'read'
            ];
        }
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }
    

    public function update_purchase() {  


        $result = $this->Api_model->purchase_update();


        if ($result == true) {


            $json['response'] = [
                    'status'     => 'ok',
                    'message'    => 'Successfully Updated'
                ];
        } else {
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'Please Try Again'
            ];
        }


        echo json_encode($json,JSON_UNESCAPED_UNICODE);

    }
    

    public function delete_purchase(){
        $id = $this->input->get('purchase_id');
        if ($this->Api_model->delete_purchase($id)) {
            $json['response'] = [
                'status'     => 'ok',
                'message'    => 'Successfully Deleted',
                'permission' => 'read'
            ];
        } else {
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'plese_try_again',
                'permission' => 'read'
            ];
        }
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }
    

    public function invoicesend_sms($phone=null,$msg=null){

        $config_data = $this->db->select('*')->from('sms_settings')->get()->row();

        if($config_data->isinvoice == 0){
            return true;
        }else{
            $recipients=$phone;
             $url      = $config_data->url;
             $senderid = $config_data->sender_id;
             $apikey   = $config_data->api_key;
             $message  = $msg;

             $urltopost = $config_data->url;
            $datatopost = array (
                    "api_key"  => $apikey,
                    "type"     => 'text',
                    "senderid" => $senderid,
                    "msg"      => $message,
                    "contacts" => $recipients
            );

            $ch = curl_init ($urltopost);
            curl_setopt ($ch, CURLOPT_POST, true);
            curl_setopt ($ch, CURLOPT_POSTFIELDS, $datatopost);
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            if ($result === false)
            {
                echo sprintf('<span>%s</span>CURL error:', curl_error($ch));
                return;
            }
            curl_close($ch);
            return $result;
        }
    }
    
    public function invoice_generator() {
        $this->db->select_max('invoice', 'invoice_no');
        $query = $this->db->get('invoice');
        $result = $query->result_array();
        $invoice_no = $result[0]['invoice_no'];

        if ($invoice_no != '') {
            $invoice_no = $invoice_no + 1;
        } else {
            $invoice_no = 1000;
        }
        return $invoice_no;
    }


    public function purchase_details() {

        $purchase_id = $this->input->get('purchase_id');
        $purchase_info = $this->Api_model->retrieve_purchase_editdata($purchase_id);
        
        $json['response'] = [
            'status'       => 'ok',
            'purchasedata' => $purchase_info
        ];

        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }

   
    public function supplier_paymentvoucher(){
        
        $data = $this->db->select("VNo as voucher")
            ->from('acc_transaction') 
            ->like('VNo', 'PM-', 'after')
            ->order_by('ID','desc')
            ->limit(1)->get()->row();

        if(!empty($data)){
            $vn = substr($data->voucher,3)+1;
            $voucher_n = 'PM-'.$vn;
        }else{
            $voucher_n = 'PM-1';
        }

        $json['response'] = [
            'status'   => 'ok',
            'voucher' => $voucher_n
        ];

        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }



    public function supplier_headcode(){
       
        $id = $this->input->get('supplier_id');
        $supplier_info = $this->db->select('supplier_name')->from('supplier_information')->where('supplier_id',$id)->get()->row();
        $head_name =$id.'-'.$supplier_info->supplier_name;
        $supplierhcode = $this->db->select('*')
                ->from('acc_coa')
                ->where('HeadName',$head_name)
                ->get()
                ->row();
        $code = $supplierhcode->HeadCode;       
        if(!empty($code)){
            $json['response'] = [
                'status'   => 'ok',
                'headcode' => $code
            ];
        }else{
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'No record found',
                'permission' => 'read'
            ];
        }

       echo json_encode($json,JSON_UNESCAPED_UNICODE);

    }
   


    public function supplier_payment_insert(){

        $currency_details = $this->Api_model->retrieve_setting_editdata();
        $voucher_no = $this->input->get('voucher_no');
        $Vtype="PM";
        $detailsinfo  = $this->input->get('paymentdetails');
        $paymentdetails     = json_decode($detailsinfo,true);
        $sup_id[]  = '';
        $dAID[]    = '';
        $Debit[]   = '';
        $i=0;
        foreach ($paymentdetails as $key => $value) {
             $sup_id[$i]   = $paymentdetails[$i]['supplier_id'];
              $dAID[$i]    = $paymentdetails[$i]['headcode'];
               $Debit[$i]  = $paymentdetails[$i]['amount'];
             $i++;
         }
   
        $Credit= 0;
        $VDate = $this->input->get('date');
        $Narration=addslashes(trim($this->input->get('remarks')));
        $IsPosted=1;
        $IsAppove=1;

        $CreateBy=1;
        $createdate=date('Y-m-d H:i:s');

        for ($i=0; $i < count($dAID); $i++) {
            $dbtid=$dAID[$i];
            $Damnt=$Debit[$i];
            $supplier_id = $sup_id[$i];
            $supinfo =$this->db->select('*')->from('supplier_information')->where('supplier_id',$supplier_id)->get()->row();
            $supplierdebit = array(
              'VNo'            =>  $voucher_no,
              'Vtype'          =>  $Vtype,
              'VDate'          =>  $VDate,
              'COAID'          =>  $dbtid,
              'Narration'      =>  $Narration,
              'Debit'          =>  $Damnt,
              'Credit'         =>  0,
              'IsPosted'       => $IsPosted,
              'CreateBy'       => $CreateBy,
              'CreateDate'     => $createdate,
              'IsAppove'       => 1
            ); 

            $cc = array(
              'VNo'            =>  $voucher_no,
              'Vtype'          =>  $Vtype,
              'VDate'          =>  $VDate,
              'COAID'          =>  1020101,
              'Narration'      =>  'Cash in Hand For Voucher No'.$voucher_no,
              'Debit'          =>  0,
              'Credit'         =>  $Damnt,
              'IsPosted'       =>  1,
              'CreateBy'       =>  $CreateBy,
              'CreateDate'     =>  $createdate,
              'IsAppove'       =>  1
            ); 
           
              $this->db->insert('acc_transaction',$supplierdebit);
              $this->db->insert('acc_transaction',$cc);
            $message = 'Mr.'.$supinfo->supplier_name.',
            '.'You have Receive '.$Damnt.' '.$currency_details[0]['currency'];
            
        }
        $json['response'] = [
            'status'   => 'ok',
            'message' => 'Payment Successful'
        ];
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function customer_headcode(){
        $id = $this->input->get('customer_id');
        $customer_info = $this->db->select('customer_name')->from('customer_information')->where('customer_id',$id)->get()->row();
        $head_name =$id.'-'.$customer_info->customer_name;
        $customerhcode = $this->db->select('*')
                ->from('acc_coa')
                ->where('HeadName',$head_name)
                ->get()
                ->row();
        $code = $customerhcode->HeadCode;       
        if(!empty($code)){
            $json['response'] = [
                'status'   => 'ok',
                'headcode' => $code
            ];
        }else{
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'No record found',
                'permission' => 'read'
            ];
        }

       echo json_encode($json,JSON_UNESCAPED_UNICODE);

   }


    public function customer_receivevoucher(){
        $data = $this->db->select("VNo as voucher")
            ->from('acc_transaction') 
            ->like('VNo', 'CR-', 'after')
            ->order_by('ID','desc')->get()->row();

        if(!empty($data)){
        $vn = substr($data->voucher,3)+1;
                   $voucher_n = 'CR-'.$vn;
                 }else{
                    $voucher_n = 'CR-1';
               }

        $json['response'] = [
        'status'   => 'ok',
        'voucher' => $voucher_n
        ];

        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }
   


    public function customer_receive_insert(){

           $currency_details = $this->Api_model->retrieve_setting_editdata();
           $voucher_no = $this->input->get('voucher_no');
            $Vtype="CR";
            $Debit = 0;
            $detailsinfo      = $this->input->get('paymentdetails');
            $paymentdetails   = json_decode($detailsinfo,true);
            $i=0;
            $customer_id[] = '';
            $dAID[]        = '';
            $crdt[]      = '';
            foreach ($paymentdetails as $key => $value) {
            $customer_id[$i] = $paymentdetails[$i]['customer_id'];
            $dAID[$i]        = $paymentdetails[$i]['headcode'];
            $crdt[$i]        = $paymentdetails[$i]['amount'];
            $i++;}
           
            $VDate = $this->input->get('date');
            $Narration = $this->input->get('remarks');
            $IsPosted  = 1;
            $IsAppove  = 1;
            $CreateBy  = 1;
           $createdate = date('Y-m-d H:i:s');

            for ($i=0; $i < count($dAID); $i++) {
                $dbtid=$dAID[$i];
                $Credit=$crdt[$i];
                $customerid = $customer_id[$i];
                $customerinfo = $this->db->select('*')->from('customer_information')->where('customer_id',$customerid)->get()->row();
                $customer_credit = array(
                  'VNo'            => $voucher_no,
                  'Vtype'          => $Vtype,
                  'VDate'          => $createdate,
                  'COAID'          => $dbtid,
                  'Narration'      => $Narration,
                  'Debit'          => 0,
                  'Credit'         => $Credit,
                  'IsPosted'       => $IsPosted,
                  'CreateBy'       => $CreateBy,
                  'CreateDate'     => $createdate,
                  'IsAppove'       => 1
                ); 
        
                $cc = array(
                  'VNo'            =>  $voucher_no,
                  'Vtype'          =>  $Vtype,
                  'VDate'          =>  $createdate,
                  'COAID'          =>  1020101,
                  'Narration'      =>  'Cash in Hand For  '.$customerinfo->customer_name,
                  'Debit'          =>  $Credit,
                  'Credit'         =>  0,
                  'IsPosted'       =>  1,
                  'CreateBy'       =>  $CreateBy,
                  'CreateDate'     =>  $createdate,
                  'IsAppove'       =>  1
                ); 

                
               $this->db->insert('acc_transaction',$customer_credit);
               $this->db->insert('acc_transaction',$cc);
               
            }

        $json['response'] = [
            'status'   => 'ok',
            'message' => 'Receive Successful'
        ];

        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function general_head() {

        $generalhead = $this->Api_model->get_general_ledger();
        if(!empty($generalhead)){
            $json['response'] = [
                    'status'     => 'ok',
                    'generalhead'=> $generalhead,
                    'permission' => 'read'
            ];
        }else{
           $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No data found',
                    'generalhead'=> [],
                    'permission' => 'read'
            ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function general_headcode(){

        $Headid = $this->input->get('Headid');
        $HeadName = $this->Api_model->general_led_get($Headid);
        if(!empty($HeadName)){
            $json['response'] = [
                'status'     => 'ok',
                'headcode'   => $HeadName,
                'permission' => 'read'
            ];
        }else{
            $json['response'] = [
                'status'     => 'error',
                'headcode'   => [],
                'message'    => 'No data found',
                'permission' => 'read'
            ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
      
    }


    public function gL_search_result(){
        $cmbGLCode   = $this->input->get('Glhead');
        $cmbCode     = $this->input->get('trhead');
        $dtpFromDate = $this->input->get('fromdate');
        $dtpToDate   = $this->input->get('todate');
        $chkIsTransction = 1;
        $HeadName    = $this->Api_model->general_led_report_headname($cmbGLCode);
        $HeadName2   = $this->Api_model->general_led_report_headname2($cmbGLCode,$cmbCode,$dtpFromDate,$dtpToDate,$chkIsTransction);
        $pre_balance = $this->Api_model->general_led_report_prebalance($cmbCode,$dtpFromDate);

        $data = array(
            'dtpFromDate'     => $dtpFromDate,
            'dtpToDate'       => $dtpToDate,
            'HeadName'        => $HeadName,
            'HeadName2'       => $HeadName2,
            'prebalance'      => $pre_balance,
            'chkIsTransction' => $chkIsTransction,

        );
        $data['ledger'] = $this->db->select('*')->from('acc_coa')->where('HeadCode',$cmbCode)->get()->result_array();
        
        if(!empty($HeadName2)){
            $json['response'] = [
                'status'     => 'ok',
                'ledger'     => $data,
                'permission' => 'read'
            ];
        }else{
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'No data found',
                'permission' => 'read'
            ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }
    

    public function profit_loss_report(){
        $dtpFromDate       = $this->input->get('from_date');
        $dtpToDate         = $this->input->get('to_date');
        $get_profit        = $this->Api_model->profit_loss_serach();
        $oResultAsset      = $get_profit['oResultAsset'];
        $oResultLiability  = $get_profit['oResultLiability'];
        $sqlF=[];
        $sqlE=[];
        foreach ($oResultAsset as $income) {
            $COAID = $income->HeadCode;
            $incom  = "SELECT acc_coa.HeadName,acc_transaction.COAID,SUM(acc_transaction.Credit)-SUM(acc_transaction.Debit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.VDate BETWEEN '$dtpFromDate' AND '$dtpToDate' AND acc_transaction.COAID = '$COAID' GROUP BY 'acc_transaction.COAID'";
           $incomereslult = $this->db->query($incom)->row();
           if(!empty($incomereslult)){
            $sqlF[] = $incomereslult;
           }
        }


        foreach ($oResultLiability as $expense) {
            $COAID = $expense->HeadCode;
            $exp  = "SELECT acc_coa.HeadName,acc_transaction.COAID,SUM(acc_transaction.Debit)-SUM(acc_transaction.Credit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.VDate BETWEEN '$dtpFromDate' AND '$dtpToDate' AND acc_transaction.COAID = '$COAID' GROUP BY 'acc_transaction.COAID'";
           $expenseresult = $this->db->query($exp)->row();
           if(!empty($expenseresult)){
            $sqlE[] = $expenseresult;
           }
        }

 
        $data['income']      = $sqlF;
        $data['expense']     = $sqlE;
        $data['dtpFromDate'] = $sqlE;
        $data['dtpToDate']   = $dtpToDate;

       
        $json['response'] = [
            'status'     => 'ok',
            'data'       => $data,
            'permission' => 'read'
        ];
       
       echo json_encode($json,JSON_UNESCAPED_UNICODE);

    }


    public function product_wise_sales_report(){

        $product_id  = $this->input->get('product_id');
        $start_date  = $this->input->get('from_date'); 
        $end_date    = $this->input->get('to_date');
        $result      = $this->Api_model->retrieve_product_search_sales_report($product_id,$start_date,$end_date);

        if(!empty($result)){
            $json['response'] = [
                    'status'     => 'ok',
                    'result'     => $result,
                    'permission' => 'read'
            ];
        }else{

            $json['response'] = [
                'status'     => 'error',
                'message'    => 'No data found',
                'permission' => 'read'
            ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
      

    }


    public function product_wise_purchase_report(){
        $product_id  = $this->input->get('product_id');
        $start_date  = $this->input->get('from_date'); 
        $end_date    = $this->input->get('to_date');
        $result      = $this->Api_model->retrieve_product_search_purchase_report($product_id,$start_date,$end_date);

        if(!empty($result)){
            $json['response'] = [
                'status'     => 'ok',
                'result'     => $result,
                'permission' => 'read'
            ];
        }else{
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'No data found',
                'permission' => 'read'
            ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
      
    }
    

    public function due_report(){
        $start_date  = $this->input->get('from_date'); 
        $end_date    = $this->input->get('to_date');
        $result      = $this->Api_model->retrieve_dateWise_DueReports($start_date,$end_date);

        if(!empty($result)){
            $json['response'] = [
                'status'     => 'ok',
                'result'     => $result,
                'permission' => 'read'
            ];
        }else{
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'No data found',
                'permission' => 'read'
            ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
      
    }


    public function password_recovery(){

        $this->load->library('form_validation');
        $this->load->model('Settings');
        $this->form_validation->set_rules('email', 'emal', 'required|valid_email|max_length[100]|trim');  
        
        $email = $this->input->post('email');
        $device_id = $this->input->post('device_id');

        if ($this->form_validation->run()){

            $user = $this->db->select("*")
            ->from('company_info')
            ->where('device_id',$device_id)
            ->where('email',$email)
            ->get();

            $ptoken = $this->generator(6);
            $checkemail='';
            if($user->num_rows() > 0) {

                $checkemail = $user->row()->email;
                $send_email = $this->setmail($checkemail,$ptoken);

                if($send_email){

                    $precdat = array(
                        'email'         => $checkemail,
                        'password'      => md5('gef'.$ptoken),
                    );

                    $this->db->where('email',$email)
                    ->where('device_id',$device_id)
                    ->update('company_info',$precdat);

                    $json['response'] = [
                        'status'     => 'ok',
                        'message'    => 'Check Your email'
                    ];

                }else{

                    $json['response'] = [
                            'status'     => 'error',
                            'message'    => 'Sorry Email Not Sent, please try again'
                    ];

                }    
                    
            }else{
                    $json['response'] = [
                        'status'     => 'error',
                        'message'    => 'Email Not Found',
                        'permission' => 'read'
                    ]; 
            }

        }else{

            $json['response'] = [
                'status'     => 'error',
                'message'    => 'Email Is Not Valid',
                'permission' => 'read'
            ];
        }

        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function setmail($email,$ptoken)
    {
        $msg = "Your password Is : ".$ptoken;
        mail($email,"MposPasswordRecovery",$msg);
        return true;
    }


    public function search_invoice(){
        $query = $this->input->get('search');
        $start=$this->input->get('start', TRUE);       
        if($start==0){
          $salelist = $this->Api_model->search_invoice($query,$limit=15,$start);
        }else{
            $salelist = $this->Api_model->search_invoice($query,$limit=15,$start);
        }
        if(!empty($salelist)){
             $json['response'] = array(
                    'status'    => 'ok',
                    'sale_list' => $salelist,
                     'total_val'=> $this->Api_model->count_search_invoice($query),
                );
        }else{
             $json['response'] = array(
                    'status'    => 'error',
                    'sale_list' => [],
                    'message'   => 'No Record Found',
                );
        }
                
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
            
    }


    public function search_product(){
        $query = $this->input->get('search');

        $start=$this->input->get('start', TRUE);

        if($start==0){
          $salelist = $this->Api_model->search_product($query,$limit=15,$start);
         }else{
            $salelist = $this->Api_model->search_product($query,$limit=15);
         }
         if(!empty($salelist)){
             $json['response'] = array(
                    'status'       => 'ok',
                    'product_list' => $salelist,
                     'total_val'   => $this->Api_model->count_search_product($query),
                );
         }else{
             $json['response'] = array(
                    'status'    => 'error',
                    'message'   => 'No Record Found',
                );
        }
                
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
            
    }


    public function productsupplier_price(){
        $supplier_id = $this->input->get('supplier_id');
        $product_id  = $this->input->get('product_id');
        $result      = $this->Api_model->supplier_productprice($supplier_id,$product_id);

        if(!empty($result)){
            $json['response'] = [
                'status'         => 'ok',
                'supplier_price' => $result,
                'permission'     => 'read'
            ];
        }else{
            $json['response'] = [
                'status'     => 'error',
                'message'    => 'No data found',
                'permission' => 'read'
            ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }


    public function supplier_productlist(){

        $supplier_id = $this->input->get('supplier_id');
        $result      = $this->Api_model->supplier_products($supplier_id);

        if(!empty($result)){
            $json['response'] = [
                    'status'           => 'ok',
                    'product_list'     => $result
            ];
        }else{
            $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'No data found'
            ];
        }
     
       echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }



    public function db_backup($tables=false, $backup_name=false){ 

            $host = $this->db->hostname;
            $user = $this->db->username;
            $pass = $this->db->password;
            $name = $this->input->get('database');


                set_time_limit(3000); 
                $mysqli = new mysqli($host,$user,$pass,$name); 
                $mysqli->select_db($name); 
                $mysqli->query("SET NAMES 'utf8'");

                $queryTables = $mysqli->query('SHOW TABLES'); 

                while($row = $queryTables->fetch_row()) { $target_tables[] = $row[0]; }   if($tables !== false) { $target_tables = array_intersect( $target_tables, $tables); } 
                
                $content = "SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";\r\nSET time_zone = \"+00:00\";\r\n\r\n\r\n/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;\r\n/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;\r\n/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;\r\n/*!40101 SET NAMES utf8 */;\r\n--\r\n-- Database: `".$name."`\r\n--\r\n\r\n\r\n";
                
                foreach($target_tables as $table){

                    if (empty($table)){ continue; } 

                    $result = $mysqli->query('SELECT * FROM `'.$table.'`');     $fields_amount=$result->field_count;  $rows_num=$mysqli->affected_rows;     $res = $mysqli->query('SHOW CREATE TABLE '.$table); $TableMLine=$res->fetch_row(); 
                    
                    $content .= "\n\n".$TableMLine[1].";\n\n";   $TableMLine[1]=str_ireplace('CREATE TABLE `','CREATE TABLE IF NOT EXISTS `',$TableMLine[1]);
                    for ($i = 0, $st_counter = 0; $i < $fields_amount;   $i++, $st_counter=0) {
                        while($row = $result->fetch_row())  { //when started (and every after 100 command cycle):
                            if ($st_counter%100 == 0 || $st_counter == 0 )  {$content .= "\nINSERT INTO ".$table." VALUES";}
                                $content .= "\n(";    for($j=0; $j<$fields_amount; $j++){ $row[$j] = str_replace("\n","\\n", addslashes($row[$j]) ); if (isset($row[$j])){$content .= '"'.$row[$j].'"' ;}  else{$content .= '""';}     if ($j<($fields_amount-1)){$content.= ',';}   }        $content .=")";
                            //every after 100 command cycle [or at last line] ....p.s. but should be inserted 1 cycle eariler
                            if ( (($st_counter+1)%100==0 && $st_counter!=0) || $st_counter+1==$rows_num) {$content .= ";";} else {$content .= ",";} $st_counter=$st_counter+1;
                        }
                    } $content .="\n\n\n";
                }

                $content .= "\r\n\r\n/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;\r\n/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;\r\n/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;";
                $backup_name = $backup_name ? $backup_name : $name.'___('.date('H-i-s').'_'.date('d-m-Y').').sql';
                ob_get_clean(); header('Content-Type: application/octet-stream');  header("Content-Transfer-Encoding: Binary");  header('Content-Length: '. (function_exists('mb_strlen') ? mb_strlen($content, '8bit'): strlen($content)) );    header("Content-disposition: attachment; filename=\"".$backup_name."\""); 
                
                    $db_name = $name.'_'.date('Y_m_d_h_i_s') . '.sql';
                    $save = 'my-assets/data/backup/' . $db_name;
                    $backup =  $content;
                    write_file($save, $backup);

                    $json['response'] = [
                        'status'       => 'bacup',
                        'database'     => base_url().$save,
                    ];

            echo json_encode($json,JSON_UNESCAPED_UNICODE);

    }

   



    public function set_paymentcheckout_data(){


            $status =  1;
            $date   = date('Y-m-d');
            $device_id   = $this->input->get('device_id');
            $data = array(
                'date'              => $date,
                'payment_duration'  => $this->input->get('duration'),
                'device_id'         => $device_id,
                'status'            => $status
            );

            $result = $this->Api_model->insert_paymentcheckout($data);

            if ($result == TRUE) {
                $json['response'] = [
                    'status'     => 'ok',
                    'message'    => 'Successfully Inserted',
                    'permission' => 'write'
                ];
            } else {
                $json['response'] = [
                    'status'     => 'error',
                    'message'    => 'Please Try Again',
                    'permission' => 'read'
                ];
               
            }

        echo json_encode($json,JSON_UNESCAPED_UNICODE);  
    }


    public function payment_duration_check(){

        $device_id = $this->input->get('device_id');
        $result  = $this->Api_model->check_duration($device_id);
        if(!empty($result)){
            if($result == 'expired'){
                  $json['response'] = [
                            'status'      => 'error',
                            'message'     => 'payment Expired',
                            'permission'  => 'read'
                        ];
            }else{
                  $json['response'] = [
                            'status'     => 'ok',
                            'message'    => 'Payment Did not expire',
                            'permission' => 'read'
                        ];
            }
            
        }else{
            $json['response'] = [
                'status'     => 'notfound',
                'message'    => 'Did not found any device',
                'permission' => 'read'
            ];
        
        }
         
        echo json_encode($json,JSON_UNESCAPED_UNICODE);
    }
 


    public function payment_expire(){

        $device_id   = $this->input->get('device_id');
        $result = $this->Api_model->expiredate_check($device_id);
        if(!empty($result)){
          
            $json['response'] = [
                'status'     => 'ok',
                'message'    => $result,
                'permission' => 'write'
            ];
        }else{
            $json['response'] = [
                'status'     => 'notfound',
                'message'    => 'Did not found any device'
            ];
          
        }
       
        echo json_encode($json,JSON_UNESCAPED_UNICODE);  
    }



}



