<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Subjects;

class SubjectsController extends BaseController
{

    public function index(){
        $subjects = new Subjects();
  
        ## Fetch all records
        $data['subjects'] = $subjects->findAll();
        return view('subjects/index',$data);
     }
  
     public function create(){
        return view('subjects/create');
     }
  
     public function store(){
        $request = service('request');
        $postData = $request->getPost();
  
        if(isset($postData['submit'])){
  
           ## Validation
           $input = $this->validate([
              'name' => 'required|min_length[3]',
              'description' => 'required'
           ]);
  
           if (!$input) {
              return redirect()->route('subjects/create')->withInput()->with('validation',$this->validator); 
           } else {
  
              $subjects = new Subjects();
  
              $data = [
                 'name' => $postData['name'],
                 'description' => $postData['description']
              ];
  
              ## Insert Record
              if($subjects->insert($data)){
                 session()->setFlashdata('message', 'Added Successfully!');
                 session()->setFlashdata('alert-class', 'alert-success');
  
                 return redirect()->route('subjects/create'); 
              }else{
                 session()->setFlashdata('message', 'Data not saved!');
                 session()->setFlashdata('alert-class', 'alert-danger');
  
                 return redirect()->route('subjects/create')->withInput(); 
              }
  
           }
        }
  
     }
  
     public function edit($id = 0){
  
        ## Select record by id
        $subjects = new Subjects();
        $subject = $subjects->find($id);
  
        $data['subject'] = $subject;
        return view('subjects/edit',$data);
  
     }
  
     public function update($id = 0){
        $request = service('request');
        $postData = $request->getPost();
  
        if(isset($postData['submit'])){
  
          ## Validation
          $input = $this->validate([
            'name' => 'required|min_length[3]',
            'description' => 'required'
          ]);
  
          if (!$input) {
             return redirect()->route('subjects/edit/'.$id)->withInput()->with('validation',$this->validator); 
          } else {
  
             $subjects = new Subjects();
  
             $data = [
                'name' => $postData['name'],
                'description' => $postData['description']
             ];
  
             ## Update record
             if($subjects->update($id,$data)){
                session()->setFlashdata('message', 'Updated Successfully!');
                session()->setFlashdata('alert-class', 'alert-success');
  
                return redirect()->route('/'); 
             }else{
                session()->setFlashdata('message', 'Data not saved!');
                session()->setFlashdata('alert-class', 'alert-danger');
  
                return redirect()->route('subjects/edit/'.$id)->withInput(); 
             }
  
          }
        }
  
     }
  
     public function delete($id=0){
  
        $subjects = new Subjects();
  
        ## Check record
        if($subjects->find($id)){
  
           ## Delete record
           $subjects->delete($id);
  
           session()->setFlashdata('message', 'Deleted Successfully!');
           session()->setFlashdata('alert-class', 'alert-success');
        }else{
           session()->setFlashdata('message', 'Record not found!');
           session()->setFlashdata('alert-class', 'alert-danger');
        }
  
        return redirect()->route('/');
  
     }
}
