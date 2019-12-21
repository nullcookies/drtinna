<?php

class Vendor_Model extends CI_Model 
{

	public function update($id,$data) 
	{
    $this->db->trans_start();
		$this->db->where("id", $id)->update("pengajuan_pspbmn", $data);
    $this->db->trans_complete();
    return $this->db->trans_status() ;
	}
  public function update_emailQueue($id, $data)
  {
    $this->db->where("id", $id)->update("email_queue", $data);
  }
  public function add_emailQueue($data)
  {
    $this->db->insert("email_queue", $data);
    return $this->db->insert_id();
  }
  public function get_emailQueue()
  {
    return $this->db
          ->where("status", 0)
          ->get("email_queue");
  }
	public function insert($data) 
	{
		$this->db->insert("pengajuan_pspbmn", $data);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
	}

	public function showUserData($userid=''){

  }
  public function showAllbyProsesID($prosesID=''){
		    $status = array('DJKN Pusat', 'PKNSI');
      	$query = $this->db
              ->select('p.*,
                        v.hasil_verifikasi,
                        v.suratHasilVerifikasifinal,
                        v.daftarKekuranganData,
                        v.rencana_survey,
                        v.nama_survey,
                        v.cp_survey')
       				->where_not_in('status_proses',$status);
        if($prosesID!==''){                 
              $query = $query->where('prosesid',$prosesID);
        } 

       	$query = $query->order_by('id', 'DESC')
                      ->from('pengajuan_pspbmn p')
                      ->join('verifikasi_pspbmn v', 'p.id = v.idPengajuan', 'left')
               				->get();
                      
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    } 


  public function showAll($userid=''){
        $query = $this->db
              ->select('v.*,p.nama perusahaan, s.nama status');
        if($userid!==''){                 
              $query = $query->where('userid',$userid);
        } 

        $query = $query->order_by('id', 'DESC')
                              ->from('vendor v')
                      ->join('perusahaan p','v.id_perusahaan=p.id')
                      ->join('status s','v.id_status=s.id')
                      ->get();

                      //echo "<pre>"; print_r($this->db->last_query());die;
                      
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function showAllbyID($idPengajuan){
		$status = array('DJKN Pusat', 'PKNSI');
      	$query = $this->db
       				->where('id',$idPengajuan)
       				->where_not_in('status_proses',$status)
       				->get('pengajuan_pspbmn');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

	
}

?>