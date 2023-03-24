CREATE TABLE `TheLoai` (
  `maLoai` int PRIMARY KEY,
  `tenLoai` nvarchar(100)
);

CREATE TABLE `Album` (
  `maAlbum` int PRIMARY KEY,
  `tenAlbum` nvarchar(100),
  `gia` int,
  `moTa` nvarchar(1000),
  `hinh` nvarchar(100),
  `tacGia` nvarchar(100),
  `TrangThai` int,
  `soLuong` int,
  `theLoai` int
);

CREATE TABLE `BaiHat` (
  `maBaiHat` int PRIMARY KEY,
  `tenBaiHat` nvarchar(100),
  `file` nvarchar(100),
  `album` int
);

CREATE TABLE `HoaDon` (
  `maHoaDon` int PRIMARY KEY,
  `tongTien` int,
  `thoiGianDat` date,
  `trangThai` nvarchar(20),
  `khachHang` int,
  `khuyenMai` int
);

CREATE TABLE `TaiKhoan` (
  `maTaiKhoan` int PRIMARY KEY,
  `Quyen` int,
  `MatKhau` nvarchar(100),
  `username` nvarchar(1000),
  `TrangThai` nvarchar(20)
);

CREATE TABLE `Quyen` (
  `maCTQ` int PRIMARY KEY,
  `NoiDungQuyen` nvarchar(100)
);

CREATE TABLE `VaiTro` (
  `maVaiTro` int PRIMARY KEY,
  `tenVaiTro` nvarchar(100)
);

CREATE TABLE `User` (
  `maUser` int PRIMARY KEY,
  `taikhoan` int,
  `tenKH` nvarchar(100),
  `SDT` nvarchar(12),
  `diaChi` nvarchar(100),
  `email` nvarchar(100),
  `TrangThai` nvarchar(20)
);

CREATE TABLE `PhieuNhap` (
  `maPhieuNhap` int PRIMARY KEY,
  `ngayNhap` date,
  `nguoiNhap` int,
  `TongGia` int
);

CREATE TABLE `NhaCungCap` (
  `maNCC` int PRIMARY KEY,
  `tenNCC` nvarchar(100),
  `diaChi` nvarchar(100),
  `SDT` nvarchar(12),
  `email` nvarchar(100),
  `TrangThai` nvarchar(20)
);

CREATE TABLE `YeuThich` (
  `album` int,
  `user` int,
  PRIMARY KEY (`album`, `user`)
);

CREATE TABLE `ChiTietPhieuNhap` (
  `album` int,
  `phieuNhap` int,
  `gia` nvarchar(100),
  `SoLuong` nvarchar(100),
  `NCC` int,
  PRIMARY KEY (`album`, `phieuNhap`)
);

CREATE TABLE `ChiTietHoaDon` (
  `album` int,
  `hoaDon` int,
  `soLuong` nvarchar(100),
  PRIMARY KEY (`album`, `hoaDon`)
);

CREATE TABLE `KhuyenMai` (
  `maKhuyenMai` int PRIMARY KEY,
  `dieuKien` int,
  `batDau` date,
  `ketThuc` date,
  `phanTram` int
);

ALTER TABLE `TheLoai` ADD FOREIGN KEY (`maLoai`) REFERENCES `Album` (`theLoai`);

CREATE TABLE `BaiHat_Album` (
  `BaiHat_album` int,
  `Album_maAlbum` int,
  PRIMARY KEY (`BaiHat_album`, `Album_maAlbum`)
);

ALTER TABLE `BaiHat_Album` ADD FOREIGN KEY (`BaiHat_album`) REFERENCES `BaiHat` (`album`);

ALTER TABLE `BaiHat_Album` ADD FOREIGN KEY (`Album_maAlbum`) REFERENCES `Album` (`maAlbum`);


ALTER TABLE `User` ADD FOREIGN KEY (`maUser`) REFERENCES `HoaDon` (`khachHang`);

ALTER TABLE `User` ADD FOREIGN KEY (`maUser`) REFERENCES `PhieuNhap` (`nguoiNhap`);

ALTER TABLE `Album` ADD FOREIGN KEY (`maAlbum`) REFERENCES `YeuThich` (`album`);

ALTER TABLE `User` ADD FOREIGN KEY (`maUser`) REFERENCES `YeuThich` (`user`);

ALTER TABLE `Album` ADD FOREIGN KEY (`maAlbum`) REFERENCES `ChiTietPhieuNhap` (`album`);

ALTER TABLE `PhieuNhap` ADD FOREIGN KEY (`maPhieuNhap`) REFERENCES `ChiTietPhieuNhap` (`phieuNhap`);

ALTER TABLE `Album` ADD FOREIGN KEY (`maAlbum`) REFERENCES `ChiTietHoaDon` (`album`);

ALTER TABLE `HoaDon` ADD FOREIGN KEY (`maHoaDon`) REFERENCES `ChiTietHoaDon` (`hoaDon`);

ALTER TABLE `TaiKhoan` ADD FOREIGN KEY (`Quyen`) REFERENCES `VaiTro` (`maVaiTro`);

ALTER TABLE `User` ADD FOREIGN KEY (`taikhoan`) REFERENCES `TaiKhoan` (`maTaiKhoan`);

ALTER TABLE `KhuyenMai` ADD FOREIGN KEY (`maKhuyenMai`) REFERENCES `HoaDon` (`khuyenMai`);

ALTER TABLE `NhaCungCap` ADD FOREIGN KEY (`maNCC`) REFERENCES `ChiTietPhieuNhap` (`NCC`);

CREATE TABLE `VaiTro_Quyen` (
  `VaiTro_maVaiTro` int,
  `Quyen_maCTQ` int,
  PRIMARY KEY (`VaiTro_maVaiTro`, `Quyen_maCTQ`)
);

ALTER TABLE `VaiTro_Quyen` ADD FOREIGN KEY (`VaiTro_maVaiTro`) REFERENCES `VaiTro` (`maVaiTro`);

ALTER TABLE `VaiTro_Quyen` ADD FOREIGN KEY (`Quyen_maCTQ`) REFERENCES `Quyen` (`maCTQ`);

