<?php

ini_set('memory_limit', '256M');

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\Word2007;

class Laporan extends CI_Controller {

	public function generateWord()
	
    {
		$bulan = $this->input->post('bulan', TRUE);
		$tahun = $this->input->post('tahun', TRUE);


		$getAnggota = $this->db->get_where('pustakawan', [
			'MONTH(created_at)' => $bulan,
			'YEAR(created_at)' => $tahun
		]);

		$getPeminjamanBuku = $this->db->select('b.judul, b.subjek')
									->from('peminjaman p')
									->join('buku b', 'p.id_buku = b.id')
									->where([
										'MONTH(p.tanggal)' => $bulan,
										'YEAR(p.tanggal)' => $tahun
									])->get();

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
        $section->addText('Laporan Anggota Bulan ' . $this->bulan($bulan) . ' ' . $tahun, ['bold' => true, 'size' => 12], ['align' => 'center']);
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

		$no = 1;
		$laki_laki_count = 0;
		$perempuan_count = 0;
		$pekerjaan_count = [];
		$pendidikan_count = [];

		foreach($getAnggota->result() as $row){
			if ($row->jenkel === 'L') {
				$jenkel = 'Laki - Laki';
				$laki_laki_count++;
			} else {
				$jenkel = 'Perempuan';
				$perempuan_count++;
			}

			if (isset($pekerjaan_count[$row->pekerjaan])) {
				$pekerjaan_count[$row->pekerjaan]++;
			} else {
				$pekerjaan_count[$row->pekerjaan] = 1;
			}

			if (isset($pendidikan_count[$row->pendidikan])) {
				$pendidikan_count[$row->pendidikan]++;
			} else {
				$pendidikan_count[$row->pendidikan] = 1;
			}

			$table->addRow();
			$table->addCell(500)->addText($no, [], ['align' => 'center']);
			$table->addCell(3000)->addText($row->nama);
			$table->addCell(2000)->addText($jenkel);
			$table->addCell(2000)->addText($row->pekerjaan);
			$table->addCell(2000)->addText($row->pendidikan);

			$no++;
		}

        $section->addTextBreak(1);

		// Menambahkan tabel anggota
		$section->addText('Statistik Anggota:', ['bold' => true, 'size' => 10]);
		$section->addTextBreak(1);

        $table = $section->addTable($tableStyle);

        // TOTAL ANGGOTA
        $table->addRow();
		$table->addCell(5500)->addText('A. Total Anggota', ['bold' => true], []);
		$table->addCell(4000)->addText($getAnggota->num_rows(), ['bold' => true], ['align' => 'center']);

        // JENIS KELAMIN
        $table->addRow();
        $table->addCell(9500, ['gridSpan' => 2])->addText('B. Jenis Kelamin', ['bold' => true], ['align' => 'left']);

        $table->addRow();
		$table->addCell(5500)->addText('Laki - laki', [], []);
		$table->addCell(4000)->addText($laki_laki_count, [''], ['align' => 'center']);

        $table->addRow();
		$table->addCell(5500)->addText('Perempuan', [], []);
		$table->addCell(4000)->addText($perempuan_count, [''], ['align' => 'center']);

        // PEKERJAAN
        $table->addRow();
        $table->addCell(9500, ['gridSpan' => 2])->addText('C. Pekerjaan', ['bold' => true], ['align' => 'left']);

		foreach ($pekerjaan_count as $pekerjaan => $count) {
			$table->addRow();
			$table->addCell(5500)->addText($pekerjaan, [], []);
			$table->addCell(4000)->addText($count, [''], ['align' => 'center']);
		}

        // PENDIDIKAN
        $table->addRow();
        $table->addCell(9500, ['gridSpan' => 2])->addText('D. Pendidikan', ['bold' => true], ['align' => 'left']);

		foreach ($pendidikan_count as $pendidikan => $count) {
			$table->addRow();
			$table->addCell(5500)->addText($pendidikan, [], []);
			$table->addCell(4000)->addText($count, [''], ['align' => 'center']);
		}

		// Menambahkan section
		$section = $phpWord->addSection();

        // Menambahkan judul laporan
        $section->addText('Laporan Peminjaman Bulan ' . $this->bulan($bulan) . ' ' . $tahun, ['bold' => true, 'size' => 12], ['align' => 'center']);
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
		
		$nos = 1;
		$subjek_count = [];
		foreach($getPeminjamanBuku->result() as $row){
			$table->addRow();
			$table->addCell(500)->addText($nos, [], ['align' => 'center']);
			$table->addCell(3000)->addText($row->judul);
			$table->addCell(2000)->addText($row->subjek);

			if (isset($subjek_count[$row->subjek])) {
				$subjek_count[$row->subjek]++;
			} else {
				$subjek_count[$row->subjek] = 1;
			}

			$nos++;
		}

        $section->addTextBreak(1);

		// Menambahkan tabel Peminjaman
		$section->addText('Statistik Peminjaman:', ['bold' => true, 'size' => 10]);
		$section->addTextBreak(1);

        $table = $section->addTable($tableStyle);

        // TOTAL Peminjaman
        $table->addRow();
		$table->addCell(5500)->addText('A. Total Peminjaman', ['bold' => true], []);
		$table->addCell(4000)->addText($getPeminjamanBuku->num_rows(), ['bold' => true], ['align' => 'center']);

        // JENIS KELAMIN
        $table->addRow();
        $table->addCell(9500, ['gridSpan' => 2])->addText('B. Subjek', ['bold' => true], ['align' => 'left']);

		foreach ($subjek_count as $subjek => $count) {
			$table->addRow();
			$table->addCell(5500)->addText($subjek, [], []);
			$table->addCell(4000)->addText($count, [''], ['align' => 'center']);
		}

		// Menyimpan dokumen Word

		// $writer = new Word2007($phpWord);
		$filename = 'Laporan_Anggota_' . $this->bulan($bulan) . '_' . $tahun;

		$writer = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		// $writer->save($filename . '.docx');

		// ob_end_clean();
		// // Header untuk mengunduh file
		header('Content-Type: application/msword');
		header('Content-Disposition: attachment;filename="' . $filename . '.docx"'); 
		header('Cache-Control: max-age=0');

		// // Clear any previous output
		ob_clean();
		flush();

		// Menyimpan file ke output
		$writer->save('php://output');
		exit;
	}

	function bulan($bln){
		switch ($bln)
		{
			case 1:
				return "Januari";
				break;
			case 2:
				return "Februari";
				break;
			case 3:
				return "Maret";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "Juli";
				break;
			case 8:
				return "Agustus";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "Oktober";
				break;
			case 11:
				return "November";
				break;
			case 12:
				return "Desember";
				break;
		}
	}
}