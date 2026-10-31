creatr database netflix;
-- phim
-- the_loai
-- quoc_gia
-- dien_vien
-- dao_dien
-- tap_phim
-- nguoi_dung

-- Table Người dùng (nguoi_dung)
CREATE TABLE if NOT EXISTS nguoi_dung(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_dang_nhap VARCHAR (30) NOT NULL,
    mat_khau VARCHAR (30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    ho_ten VARCHAR(50) NOT NULL,
    ngay_sinh date NOT NULL,
    so_dien_thoai VARCHAR(10) NOT NULL,
    gioi_tinh boolean NOT NULL -- true: nam / false: nữ
);    
-- the_loai
CREATE TABLE if NOT EXISTS the_loai(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_the_loai VARCHAR(255) NOT NULL
);
-- dien_vien
CREATE TABLE if NOT EXISTS dien_vien(
    id INT AUTO_INCREMENT PRIMARY KEY, 
    ho_ten VARCHAR(100) NOT NULL,
    ngay_sinh date NOT NULL
);

-- dao_dien
CREATE TABLE if NOT EXISTS dao_dien(
    id INT AUTO_INCREMENT PRIMARY KEY, 
    ho_ten VARCHAR(100) NOT NULL,
    ngay_sinh date NOT NULL
);

-- phim
CREATE TABLE if NOT EXISTS phim(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_phim VARCHAR(255) NOT NULL,
    quoc_gia VARCHAR(100) NOT NULL,
    dao_dien_id INT NOT NULL,
    nam datetime NOT NULL, 
    do_tuoi INT NOT NULL, 
    mo_ta VARCHAR(255) NOT NULL
);

--phim_the_loai
CREATE TABLE if NOT EXISTS phim_the_loai(
    id INT AUTO_INCREMENT PRIMARY KEY,
    phim_id INT NOT NULL,
    the_loai_id INT NOT NULL
);


-- phim_dien_vien
CREATE TABLE if NOT EXISTS phim_dien_vien(
    id INT AUTO_INCREMENT PRIMARY KEY,
    phim_id INT NOT NULL,
    dien_vien_id INT NOT NULL
); 
