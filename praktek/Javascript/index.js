// deklarasi variabel
// var, let, const

// let nama = "Allya"

//aturan const : tidak boleh diubah
//nama ="Putri"

// console.log(nama);


// tipe data primitif
// number, string, array, object, boolean, float

// let i = []

const mahasiswa = [
    "Allya Putri",
    "Nadila Gustin",
    "Fathur Muhammad",
    "Nagita Slavina"
]

// console.log(mahasiswa)

//cara yang lama
//document.write(mahasiswa[0])

// cara cepat
//for loop
//document.write("<ul>")
//for (let i = 0; i < mahasiswa.length; i++){
 //   document.write("<li>" + mahasiswa[i]  + "</li><br>")
//}

//document.write("</ul>")

//while loop
let i = 0;
while (i < mahasiswa.length) {
    document.write("<li>" + mahasiswa[i]  + "</li><br>");
    i++;
}
document.write("</ul>")