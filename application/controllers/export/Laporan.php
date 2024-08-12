<?php
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\Word2007;

class Laporan extends CI_Controller {

	public function generateWord()
	
    {
		// Membuat objek PHPWord
		$phpWord = new PhpWord();

		// Menambahkan section
		$section = $phpWord->addSection();

        // Menambahkan tabel dengan border
        $tableStyle = [
            'borderSize' => 6, // Ketebalan border
            'borderColor' => '000000', // Warna border dalam format hex
            'cellMargin' => 80, // Margin sel di dalam tabel
        ];
        
        // Menambahkan judul laporan
        $section->addText('Laporan Anggota Bulan Juli 2024', ['bold' => true, 'size' => 12], ['align' => 'center']);
        $section->addTextBreak(1);

        // Menambahkan tabel anggota
        $section->addText('Tabel Anggota:', ['bold' => true, 'size' => 10]);
        $section->addTextBreak(1);

        $table = $section->addTable($tableStyle);

		// Menambahkan header tabel
		$table->addRow();
		$table->addCell(500)->addText('No', ['bold' => true], ['align' => 'center']);
		$table->addCell(3000)->addText('Nama', ['bold' => true], ['align' => 'center']);
		$table->addCell(2000)->addText('Jenis Kelamin', ['bold' => true], ['align' => 'center']);
		$table->addCell(2000)->addText('Pekerjaan', ['bold' => true], ['align' => 'center']);
		$table->addCell(2000)->addText('Pendidikan', ['bold' => true], ['align' => 'center']);

        $table->addRow();
        $table->addCell(500)->addText('1', [], ['align' => 'center']);
        $table->addCell(3000)->addText('Alfian Rahmatullah');
        $table->addCell(2000)->addText('Laki - laki');
        $table->addCell(2000)->addText('Wiraswasta');
        $table->addCell(2000)->addText('S2');

        $section->addTextBreak(1);

		// Menambahkan tabel anggota
		$section->addText('Statistik Anggota:', ['bold' => true, 'size' => 10]);
		$section->addTextBreak(1);

        $table = $section->addTable($tableStyle);

        // TOTAL ANGGOTA
        $table->addRow();
		$table->addCell(5500)->addText('A. Total Anggota', ['bold' => true], []);
		$table->addCell(4000)->addText('50', ['bold' => true], ['align' => 'center']);

        // JENIS KELAMIN
        $table->addRow();
        $table->addCell(9500, ['gridSpan' => 2])->addText('B. Jenis Kelamin', ['bold' => true], ['align' => 'left']);

        $table->addRow();
		$table->addCell(5500)->addText('Laki - laki', [], []);
		$table->addCell(4000)->addText('30', [''], ['align' => 'center']);

        $table->addRow();
		$table->addCell(5500)->addText('Perempuan', [], []);
		$table->addCell(4000)->addText('20', [''], ['align' => 'center']);

        // PEKERJAAN
        $table->addRow();
        $table->addCell(9500, ['gridSpan' => 2])->addText('C. Pekerjaan', ['bold' => true], ['align' => 'left']);

        $table->addRow();
		$table->addCell(5500)->addText('Pegawai Negeri Sipil (PNS)', [], []);
		$table->addCell(4000)->addText('30', [''], ['align' => 'center']);

        $table->addRow();
		$table->addCell(5500)->addText('Pegawai Badan Pangan Nasional', [], []);
		$table->addCell(4000)->addText('20', [''], ['align' => 'center']);

        $table->addRow();
		$table->addCell(5500)->addText('Pengawas Pangan', [], []);
		$table->addCell(4000)->addText('20', [''], ['align' => 'center']);

        $table->addRow();
		$table->addCell(5500)->addText('Petugas Laboratorium Pangan', [], []);
		$table->addCell(4000)->addText('20', [''], ['align' => 'center']);

        $table->addRow();
		$table->addCell(5500)->addText('Peneliti Pangan', [], []);
		$table->addCell(4000)->addText('20', [''], ['align' => 'center']);

        $table->addRow();
		$table->addCell(5500)->addText('Analis Kebijakan Pangan', [], []);
		$table->addCell(4000)->addText('20', [''], ['align' => 'center']);
        
        $table->addRow();
		$table->addCell(5500)->addText('Pekerjaan lainnya', [], []);
		$table->addCell(4000)->addText('20', [''], ['align' => 'center']);

        // PENDIDIKAN
        $table->addRow();
        $table->addCell(9500, ['gridSpan' => 2])->addText('D. Pendidikan', ['bold' => true], ['align' => 'left']);

        $table->addRow();
		$table->addCell(5500)->addText('SD/MI', [], []);
		$table->addCell(4000)->addText('30', [''], ['align' => 'center']);

        $table->addRow();
		$table->addCell(5500)->addText('SMP/MTS', [], []);
		$table->addCell(4000)->addText('20', [''], ['align' => 'center']);

        $table->addRow();
		$table->addCell(5500)->addText('SMA/MA/SMK', [], []);
		$table->addCell(4000)->addText('20', [''], ['align' => 'center']);

        $table->addRow();
		$table->addCell(5500)->addText('Diploma (D1-D4)', [], []);
		$table->addCell(4000)->addText('20', [''], ['align' => 'center']);

        $table->addRow();
		$table->addCell(5500)->addText('Sarjana (S1)', [], []);
		$table->addCell(4000)->addText('20', [''], ['align' => 'center']);

        $table->addRow();
		$table->addCell(5500)->addText('Magister (S2)', [], []);
		$table->addCell(4000)->addText('20', [''], ['align' => 'center']);
        
        $table->addRow();
		$table->addCell(5500)->addText('Doktor (S3)', [], []);
		$table->addCell(4000)->addText('20', [''], ['align' => 'center']);

		// Menambahkan section
		$section = $phpWord->addSection();

        // Menambahkan judul laporan
        $section->addText('Laporan Peminjaman Bulan Juli 2024', ['bold' => true, 'size' => 12], ['align' => 'center']);
        $section->addTextBreak(1);

        // Menambahkan tabel anggota
        $section->addText('Tabel Peminjaman:', ['bold' => true, 'size' => 10]);
        $section->addTextBreak(1);
        
        $table = $section->addTable($tableStyle);

		// Menambahkan header tabel
		$table->addRow();
		$table->addCell(500)->addText('No', ['bold' => true], ['align' => 'center']);
		$table->addCell(5000)->addText('Judul Buku', ['bold' => true], ['align' => 'center']);
		$table->addCell(4000)->addText('Subjek', ['bold' => true], ['align' => 'center']);
		
        $table->addRow();
        $table->addCell(500)->addText('1', [], ['align' => 'center']);
        $table->addCell(3000)->addText('Indeks Ketahanan Pangan Tahun 2021');
        $table->addCell(2000)->addText('000: Ilmu Komputer, Informasi, dan Karya Umum');

        $section->addTextBreak(1);

		// Menambahkan tabel Peminjaman
		$section->addText('Statistik Peminjaman:', ['bold' => true, 'size' => 10]);
		$section->addTextBreak(1);

        $table = $section->addTable($tableStyle);

        // TOTAL Peminjaman
        $table->addRow();
		$table->addCell(5500)->addText('A. Total Peminjaman', ['bold' => true], []);
		$table->addCell(4000)->addText('50', ['bold' => true], ['align' => 'center']);

        // JENIS KELAMIN
        $table->addRow();
        $table->addCell(9500, ['gridSpan' => 2])->addText('B. Subjek', ['bold' => true], ['align' => 'left']);

        $table->addRow();
		$table->addCell(5500)->addText('000: Ilmu Komputer, Informasi, dan Karya Umum', [], []);
		$table->addCell(4000)->addText('30', [''], ['align' => 'center']);

		// Menyimpan dokumen Word
		$writer = new Word2007($phpWord);
		$filename = 'Laporan_Anggota_Juli_2024';

		// Header untuk mengunduh file
		header('Content-Type: application/msword');
		header('Content-Disposition: attachment;filename="' . $filename . '.docx"'); 
		header('Cache-Control: max-age=0');

		// Menyimpan file ke output
		$writer->save('php://output');
	}
}