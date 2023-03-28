CREATE TABLE TheLoai (
  maLoai int PRIMARY KEY,
  tenLoai nvarchar(100)
);

CREATE TABLE Album (
  maAlbum int PRIMARY KEY,
  tenAlbum nvarchar(100),
  gia int,
  moTa nvarchar(1000),
  hinh nvarchar(100),
  tacGia nvarchar(100),
  TrangThai int,
  soLuong int,
  theLoai int
);

CREATE TABLE BaiHat (
  maBaiHat int PRIMARY KEY,
  tenBaiHat nvarchar(100),
  linkFile nvarchar(100)
);

CREATE TABLE HoaDon (
  maHoaDon int PRIMARY KEY,
  tongTien int,
  thoiGianDat date,
  trangThai nvarchar(20),
  khachHang int,
  khuyenMai int
);

CREATE TABLE Quyen (
  maCTQ int PRIMARY KEY,
  NoiDungQuyen nvarchar(100)
);

CREATE TABLE VaiTro (
  maVaiTro int PRIMARY KEY,
  tenVaiTro nvarchar(100)
);

CREATE TABLE nguoiDung (
  maNguoiDung int PRIMARY KEY,
  hoTen nvarchar(100),
  SDT nvarchar(12),
  diaChi nvarchar(100),
  email nvarchar(100),
  TrangThai nvarchar(20),
  vaiTro int
);

CREATE TABLE PhieuNhap (
  maPhieuNhap int PRIMARY KEY,
  ngayNhap date,
  nguoiNhap int,
  TongGia int
);

CREATE TABLE NhaCungCap (
  maNCC int PRIMARY KEY,
  tenNCC nvarchar(100),
  diaChi nvarchar(100),
  SDT nvarchar(12),
  email nvarchar(100),
  TrangThai nvarchar(20)
);

CREATE TABLE YeuThich (
  album int,
  nguoiDung int,
  PRIMARY KEY (album, nguoiDung)
);

CREATE TABLE ChiTietPhieuNhap (
  album int,
  phieuNhap int,
  gia nvarchar(100),
  SoLuong nvarchar(100),
  NCC int,
  PRIMARY KEY (album, phieuNhap)
);

CREATE TABLE ChiTietHoaDon (
  album int,
  hoaDon int,
  soLuong nvarchar(100),
  PRIMARY KEY (album, hoaDon)
);

CREATE TABLE KhuyenMai (
  maKhuyenMai int PRIMARY KEY,
  dieuKien int,
  batDau date,
  ketThuc date,
  phanTram int
);

CREATE TABLE BaiHat_Album (
  BaiHat_maBaiHat int,
  Album_maAlbum int,
  PRIMARY KEY (BaiHat_maBaiHat, Album_maAlbum)
);

CREATE TABLE VaiTro_Quyen (
  VaiTro_maVaiTro int,
  Quyen_maCTQ int,
  PRIMARY KEY (VaiTro_maVaiTro, Quyen_maCTQ)
);

CREATE TABLE GioHang (
  maKhachHang int,
  maAlbum int,
  soLuong int,
  PRIMARY KEY (maKhachHang, maAlbum)
);

ALTER TABLE Album ADD FOREIGN KEY (theLoai) REFERENCES TheLoai (maLoai);

ALTER TABLE HoaDon ADD FOREIGN KEY (khachHang) REFERENCES nguoiDung (maNguoiDung);

ALTER TABLE PhieuNhap ADD FOREIGN KEY (nguoiNhap) REFERENCES nguoiDung (maNguoiDung);

ALTER TABLE YeuThich ADD FOREIGN KEY (album) REFERENCES Album (maAlbum);

ALTER TABLE YeuThich ADD FOREIGN KEY (nguoiDung) REFERENCES nguoiDung (maNguoiDung);

ALTER TABLE ChiTietPhieuNhap ADD FOREIGN KEY (album) REFERENCES Album (maAlbum);

ALTER TABLE ChiTietPhieuNhap ADD FOREIGN KEY (phieuNhap) REFERENCES PhieuNhap (maPhieuNhap);

ALTER TABLE ChiTietHoaDon ADD FOREIGN KEY (album) REFERENCES Album (maAlbum);

ALTER TABLE ChiTietHoaDon ADD FOREIGN KEY (hoaDon) REFERENCES HoaDon (maHoaDon);

ALTER TABLE nguoiDung ADD FOREIGN KEY (vaiTro) REFERENCES VaiTro (maVaiTro);

ALTER TABLE HoaDon ADD FOREIGN KEY (khuyenMai) REFERENCES KhuyenMai (maKhuyenMai);

ALTER TABLE ChiTietPhieuNhap ADD FOREIGN KEY (NCC) REFERENCES NhaCungCap (maNCC);

ALTER TABLE BaiHat_Album ADD FOREIGN KEY (BaiHat_maBaiHat) REFERENCES BaiHat (maBaiHat);

ALTER TABLE BaiHat_Album ADD FOREIGN KEY (Album_maAlbum) REFERENCES Album (maAlbum);

ALTER TABLE VaiTro_Quyen ADD FOREIGN KEY (VaiTro_maVaiTro) REFERENCES VaiTro (maVaiTro);

ALTER TABLE VaiTro_Quyen ADD FOREIGN KEY (Quyen_maCTQ) REFERENCES Quyen (maCTQ);

ALTER TABLE GioHang ADD FOREIGN KEY (maAlbum) REFERENCES Album (maAlbum);

ALTER TABLE GioHang ADD FOREIGN KEY (maKhachHang) REFERENCES nguoiDung (maNguoiDung);
