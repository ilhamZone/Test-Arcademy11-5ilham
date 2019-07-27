function biodata(name, age, address, hobbies, is_married, list_school, skill, interest_in_coding) {
  let bio = {
    name,
    age,
    address,
    hobbies,
    is_married,
    list_school,
    skill,
    interest_in_coding
  }
  return console.log(JSON.stringify(bio));
};

biodata('Ilham Muhammad', 24, 'Komp. Filano Jaya Padang Sumatera Barat', ['Swimming', 'Online', 'Coding'],
        false, [{ name: 'SMAN 1 Sungai Limau', year_in: 2009, year_out: 2012, major: 'IPS' },
        { name: 'Polteknik Negeri Padang', year_in: 2012, year_out: 2015, major: 'Manajemen Informatika' }],
        [{ skill_name: 'Javascript', level: 'Beginner' }, { skill_name: 'PHP', level: 'Beginner' },
        { skill_name: 'React Native', level: 'Beginner' }],true);
