SELECT * FROM ((((tb_kembali INNER JOIN tb_pinjam ON tb_kembali.kd_pinjam = tb_pinjam.kd_pinjam) INNER JOIN tb_member ON tb_pinjam.id_member = tb_member.id_member) INNER JOIN tb_buku ON tb_pinjam.kd_buku = tb_buku.kd_buku) INNER JOIN tb_keterangan ON tb_kembali.kd_ket = tb_keterangan.kd_ket);