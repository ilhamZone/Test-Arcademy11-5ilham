function sortArray(array) {
  // Ini untuk mengurutkan panjang array array dari kecil ke besar
  array.sort((a,b) => {
    if (a.length < b.length) {
      return -1;
    } else if(a.length > b.length) {
      return 1;
    }
  });
  // ini untuk mengurutkan abjad setiap elemen array
  array.map(e => {
    e.sort();
  });
  return console.log(array);
}

let data = [
  ['a', 'c', 'b', 'e', 'd'], 
  ['g', 'e', 'f']
];

let datalain = [
  ['g', 'h', 'i', 'j'],
  ['a', 'c', 'b', 'e', 'd'],
  ['g', 'e', 'f']
];

sortArray(data);
sortArray(datalain);