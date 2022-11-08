<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\StudentModel;


class User extends BaseController{


	public function insertReg(){

          $students=new StudentModel();

          $data=['EnrolNo' => $this->request->getPost('enrolNo'),
                'StudentName' => $this->request->getPost('studentName'),
                'Gender' => $this->request->getPost('selectGen'),
                'FathersName' => $this->request->getPost('fathersName'),
                'StudentCnic' => $this->request->getPost('Students-CNIC'),
                'StudentDateBirth' => $this->request->getPost('studentsBirth'),
                'StudentAddress' => $this->request->getPost('studentAddress'),

                        ];

                  $students->save($data);
                      return redirect('Home')->with('status','Registeration Successfully Please login');

                      



}

}


	?>