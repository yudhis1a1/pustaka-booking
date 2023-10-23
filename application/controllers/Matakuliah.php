<?php
class Matakuliah extends CI_Controller
{
   public function index()
   {
      $this->load->view('view-form-matakuliah');
   }

   public function cetak()
   {
      $this->form_validation->set_rules('kode', 'Kode mtk', 'required|min_length[3]', ['required' => 'Kode mtk Harus diisi', 'min_length' => 'Kode terlalu pendek']);

      $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', ['required' => 'Nama Matakuliah Harus diisi', 'min_length' => 'Nama terlalu pendek']);

      if ($this->form_validation->run() == false) {
         $this->load->view('view-form-matakuliah');
      } else {
         $data = ['kd' => $this->input->post('kode'), 'nm' => $this->input->post('nama'), 'sks' => $this->input->post('sks')];
         $this->load->view('view-data-matakuliah', $data);
      }
   }
}
