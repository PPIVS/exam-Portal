<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\StudentModel;


class User extends BaseController{


	public function insertReg(){

          $students=new StudentModel();


                //for verification if duplicates account has been created
              $result= $students->where('EnrolNo ',$this->request->getVar('enrolNo'))->first();

 if($result['EnrolNo']==$this->request->getVar('enrolNo') || $result['StudentCnic']==$this->request->getVar('Students-CNIC') || $result['StudentEmail']==$this->request->getVar('studentsEmail') || $result['StudentPhoneNo']==$this->request->getVar('phoneNo')){

     echo '<script>alert("User Already Exist. Please Try again")</script>';

     return view('StudentReg');

 }else{


        $data=['EnrolNo' => $this->request->getPost('enrolNo'),
                'StudentName' => $this->request->getPost('studentName'),
                'Gender' => $this->request->getPost('selectGen'),
                'FathersName' => $this->request->getPost('fathersName'),
                'StudentCnic' => $this->request->getPost('Students-CNIC'),
                'StudentDateBirth' => $this->request->getPost('studentsBirth'),
                'StudentAddress' => $this->request->getPost('studentAddress'),
                'StudentEmail' => $this->request->getPost('studentsEmail'),
                'StudentPhoneNo' => $this->request->getPost('phoneNo'),
                'StudentPhoto' => $this->request->getPost('studentPhoto'),
                'StudentPass' => $this->request->getPost('studentPass'),];

      $students->save($data);
      return redirect('Home')->with('status','Registeration Successfully Please login');

 } //end else

    



}//end class




public function studentLogin(){
 
 $students=new StudentModel();

 $result= $students->where('StudentCnic ',$this->request->getVar('loginCnic'))->first();


 if($result !=null && $result['StudentCnic']==$this->request->getVar('loginCnic') && $result['StudentPass']==$this->request->getVar('studentLoginPass')){
   
    echo 'hello world';
 }



else{

  echo 'Cnice/password is wrong, If you are new student please create account first';
}

       
}







}


	?>