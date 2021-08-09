SELECT*
FROM tb_matakuliah, tb_mahasiswa_nilai, tb_mahasiswa
WHERE tb_mahasiswa.mhs_id = tb_mahasiswa_nilai.mhs_id AND tb_matakuliah.mk_kode = 'MK303' 
ORDER BY tb_mahasiswa_nilai.nilai DESC LIMIT 1