function count_vowels(str) {
  let string = 'aiueoAIUEO';
  let convert_arr = string.split('');
  let count = 0;
  let arr = str.split('');

  for (i = 0; i < arr.length; i++) {
    if (convert_arr.includes(arr[i])) {
      count += 1;
    }
  }
  return console.log(count);
}
count_vowels('programmEr');
count_vowels('hmm..');