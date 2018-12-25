<?php
 
class User_model extends CI_Model {
 
  function __construct()
  {
    parent::__construct();
  }
  function SaveForm($form_data)
  {
    $this->db->insert('member', $form_data);
 
    if ($this->db->affected_rows() == '1')
    {
      return TRUE;
    }
 
    return FALSE;
  }
  
     public function cek_login($user_name, $password){
           $this->db->select('*');
           $this->db->from('admin');
           $this->db->where('user_name', $user_name);
           $this->db->where('password',$password);

           return $this->db->get()->num_rows(); 
      }
  function list_table()
  {
    return $this->db->get('v_userpinjam');
  }

  function laporan()
  {
    $query = $this->db->select('*')
                  ->from('laporan');
      foreach ($query as $data) {
        $hasil[]=$data;
      }
    return $hasil;
  }

  function book()
  {
    return $this->db->get('buku');
  }
  function simpan_book($data)
  { 
    $this->db->insert("buku", $data);
  }

  public function rubah_buku($kd_buku)
  {
    
    $query = $this->db->where("kd_buku", $kd_buku)
            ->get("buku");

    if($query){
      return $query->row();
    }
    else{
      return false;
    }

  }

  public function update_buku($data, $id)
  {
    
    $query = $this->db->update("buku", $data, $id);

    if($query){
      return true;
    }else{
      return false;
    }

  }
   public function hapus_buku($id)
  {
    
    $query = $this->db->delete('buku',$id);

    if($query){
      return true;
    }else{
      return false;
    }
  }
  function list_anggota()
  {
    return $this->db->get('anggota');
  }
  function simpan_anggota($data)
  { 
    $this->db->insert("anggota", $data);
  }

  public function rubah_anggota($id_anggota)
  {
    
    $query = $this->db->where("id_anggota", $id_anggota)
            ->get("anggota");

    if($query){
      return $query->row();
    }
    else{
      return false;
    }

  }

  public function update_anggota($data, $id)
  {
    
    $query = $this->db->update("anggota", $data, $id);

    if($query){
      return true;
    }else{
      return false;
    }

  }
   public function hapus_anggota($id)
  {
    
    $query = $this->db->delete('anggota',$id);

    if($query){
      return true;
    }else{
      return false;
    }
  }
  function member()
  {
    return $this->db->get('member');
  }
   public function terima_member($id_member)
  {
    
     $this->db->select('nik,nama,no_hp,email,alamat');
     $this->db->where('id_member',$id_member);
     $sql = $this->db->get('member')->result();
     foreach ($sql as $a){
     $query=$this->db->insert('anggota',$a);
     }
    if($query){
    $query = $this->db->where('id_member',$id_member)
                      ->delete('member');
    }else{
      return false;
    }
  }
  public function hapus_calon($id)
  {
    
    $query = $this->db->delete('member', $id);

    if($query){
      return true;
    }else{
      return false;
    }
  }
   function list_pinjam()
  {
    return $this->db->get('pinjam');
  }
  function simpan_pinjam($data)
  { 
    $this->db->insert("pinjam", $data);
  }

  public function rubah_pinjam($kd_transaksi)
  {
    
    $query = $this->db->where("kd_transaksi", $kd_transaksi)
            ->get("pinjam");

    if($query){
      return $query->row();
    }
    else{
      return false;
    }

  }

  public function update_pinjam($data, $id)
  {
    
    $query = $this->db->update("pinjam", $data, $id);

    if($query){
      return true;
    }else{
      return false;
    }

  }
   public function hapus_pinjam($id)
  {
    
    $query = $this->db->delete('pinjam',$id);

    if($query){
      return true;
    }else{
      return false;
    }
  }
  function list_denda()
  {
    return $this->db->get('v_denda');
  }

    public function hapus_pengembalian($id)
  {
    
    $query = $this->db->delete('pinjam',$id);

    if($query){
      return true;
    }else{
      return false;
    }
  }
}
?>