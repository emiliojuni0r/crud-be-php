CREATE SCHEMA `db_mhs` ;


CREATE TABLE mahasiswa (
nim varchar(13) NOT NULL,
id_mhs int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
nama varchar(400) NOT NULL,
jenis_kelamin enum('P', 'L') NOT NULL,
jurusan varchar(30) NOT NULL,
alamat text NOT NULL
);

INSERT INTO mahasiswa VALUES ('23213131', 1, 'mario baloteli', 'L', 'TRPL', 'Milan');	