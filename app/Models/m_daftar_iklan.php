<?php namespace App\Models;
use CodeIgniter\Model;
 
class m_daftar_iklan extends Model
{
    protected $table = 'daftar_iklan';
    protected $primaryKey = 'indeks';
    protected $allowedFields = ['indeks', 'kategori', 'judul', 'slug', 'deskripsi', 'nama', 'telp', 'status_wa', 'gambar', 'status_terbit'];
     
    public function rinci_iklan($slug = false)
    {
        if($slug === false){
            return $this->findAll();
        }
        else{
            return $this->getWhere(['slug' => $slug]);
        }
    }

    // public function tambah_iklan($data)
    // {
    //     $query = $this->db->table($this->table)->insert($data);
    //     return $query;
    // }

    public function ambil_kategori($kategori){
        return $this->table('daftar_iklan')->where('kategori', $kategori);
    }

    public function cari($kata_kunci) {
        // $builder = $this->table('daftar_iklan');
        // $builder->like('judul', $kata_kunci);
        // return $builder;
        return $this->table('daftar_iklan')->like('judul', $kata_kunci)->orLike('deskripsi', $kata_kunci);
    }

    // public function wa_status($indeks){
    //     return $this->table('daftar_iklan')->getWhere('indeks', array('indeks' => $indeks));

    // }
 
}