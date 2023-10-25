# 1. buat list untuk menampilkan data pada kategori kendaraan
# [namakendaraan, jeniskendaraan, merkkendaraan, cc kendaraan]

kendaraan1=["Honda BRV","Mobil","Honda","1500"]
print(kendaraan1)

# 2. dari nomer 1 di tambahkan dari list yang sudah ada
# [warna kendaraan, jml ban kendaraan, harga kendaraan]
# di hapus jenis kendaraan nya

kendaraan1 = kendaraan1 + ["hitam",4,356_000_000]
kendaraan1.remove("Mobil")
print(kendaraan1)

pesan = """
menu:
1. menghitung luas persegi
2. menghitung luas lingkaran
3. menghitung luas segitiga
pilih menu:
"""
pilihan = input(pesan)

match pilihan:
    case "1":
        print("anda memasukan angka 1 untuk menghitung luas persegi")
        sisi = int(input("masukan sisi:"))
        luas = sisi * sisi
        print("luas persegi dengan sisi", sisi, "adalah", luas)
    case "2":
        print("anda memasukan angka 2 untuk menghitung luas lingkaran")
        jari2 = int(input("masukan jari2:"))
        luas = 22/7 * jari2 * jari2
        print("luas lingkaran dengan jari2", jari2, "adalah", luas)

    case "3":
        print("anda memasukan angka 3 untuk menghitung luas segitiga")
        alas = int(input("masukan alas:"))
        tinggi = int(input("masukan tinggi:"))
        luas = 1/2 * alas * tinggi 
        print("luas segitiga dengan alas", alas,"dan tinggi" ,tinggi, "adalah", luas)
    case _:
        print("input tidak valid")
        


