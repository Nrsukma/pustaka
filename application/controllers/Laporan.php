<?php defined('BASEPATH') or exit('No Direct script access allowed');
class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function laporan_buku()
    {
        $data['judul'] = 'Laporan Data Buku';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['buku'] = $this->ModelBuku->getBuku()->result_array();
        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('buku/laporan_buku', $data);
        $this->load->view('templates/footer');
    }

    // Laporan buku
    public function cetak_laporan_buku()
    {
        $data['buku'] = $this->ModelBuku->getBuku()->result_array();
        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();

        $this->load->view('buku/laporan_print_buku', $data);
    }

    public function laporan_buku_pdf()

    {
        $this->load->library('dompdf_gen');

        $data['buku'] = $this->ModelBuku->getBuku()->result_array();

        $this->load->view('buku/laporan_pdf_buku', $data);

        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; // tipe format potrait atau landscape
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        // Convert to pdf
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_data_buku.pdf", array('Attachment' => 0));
        // Nama file pdf yang di hasilkan

    }

    public function export_excel()
    {
        $data = array('title' => 'laporan buku', 'buku' => $this->ModelBuku->getBuku()->result_array());
        $this->load->view('buku/export_excel_buku', $data);
    }

    // Laporan Pinjam
    public function laporan_pinjam()
    {
        $data['judul'] = 'Laporan Data Pinjam';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['pinjam'] = $this->ModelPinjam->joinData();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pinjam/laporan_pinjam', $data);
        $this->load->view('templates/footer');
    }

    public function cetak_laporan_pinjam()
    {
        $data['pinjam'] = $this->ModelPinjam->joinData();

        $this->load->view('pinjam/laporan_print_pinjam', $data);
    }

    public function laporan_pinjam_pdf()

    {
        $this->load->library('dompdf_gen');

        $data['pinjam'] = $this->ModelPinjam->joinData();

        $this->load->view('pinjam/laporan_pdf_pinjam', $data);

        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; // tipe format potrait atau landscape
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        // Convert to pdf
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_data_pinjam.pdf", array('Attachment' => 0));
        // Nama file pdf yang di hasilkan

    }

    public function export_excel_pinjam()
    {
        $data = array('title' => 'laporan pinjam', 'pinjam' => $this->modelPinjam->joinData()->result_array());
        $this->load->view('pinjam/export_excel_pinjam', $data);
    }

    // Laporan Anggota
    public function laporan_anggota()
    {
        $data['judul'] = 'Laporan Data Anggota';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/laporan_anggota', $data);
        $this->load->view('templates/footer');
    }

    public function cetak_laporan_anggota()
    {
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();

        $this->load->view('user/laporan_print_anggota', $data);
    }

    public function laporan_anggota_pdf()

    {
        $this->load->library('dompdf_gen');

        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();

        $this->load->view('user/laporan_pdf_anggota', $data);

        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; // tipe format potrait atau landscape
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        // Convert to pdf
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_data_anggota.pdf", array('Attachment' => 0));
        // Nama file pdf yang di hasilkan

    }

    public function export_excel_anggota()
    {
        $data = array('title' => 'laporan anggota', 'anggota' => $this->ModelUser->getUserLimit()->result_array());

        $this->load->view('user/export_excel_anggota', $data);
    }
}
