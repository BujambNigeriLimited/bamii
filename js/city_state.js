var states = Object();

states['Nigeria'] = '|Abia|Adamawa|Akwa Ibom|Anambra|Bauchi|Bayelsa|Benue|Borno|Cross River|Delta|Ebonyi|Edo|Ekiti|Enugu|Gombe|Imo|Jigawa|Kaduna|Kano|Katsina|Kebbi|Kogi|Kwara|Lagos|Nasarawa|Niger|Ogun|Ondo|Osun|Oyo|Plateau|Sokoto|Taraba|Yobe|Zamfara|FCT|'

////////////////////////////////////////////////////////////////////////////

var city_states = Object();


city_states['Abia'] = '|Aba North|Aba South|Arochukwu|Bende|Ikwano|Isiala Ngwa North|Isiala Ngwa South|Isuikwuato|Obingwa|Ohafia|Osisioma|Ugwunagbo|Ukwa East|Ukwa West|Umuahia North|Umuahia South|Umuneochi|'
city_states['Adamawa'] = '|Demsa|Fufore|Ganaye|Gireri|Gombi|Guyuk|Hong|Jada|Lamurde|Madagali|Maiha|Mayo-Belwa|Michika|Mubi North|Mubi South|Numan|Shelleng|Song|Toungo|Yola North|Yola South|'
city_states['Akwa Ibom'] = '|Abak|Eastern Obolo|Eket|Esit Eket|Essien Udim|Etim Ekpo|Etinan|Ibeno|Ibesikpo Asutan|Ibiono Ibom|Ika|Ikono|Ikot Abasi|Ikot Ekpene|Ini|Itu|Mbo|Mkpat Enin|Nsit Atai|Nsit Ibom|Nsit Ubium|Obot Akara|Okobo|Onna|Oron|Oruk Anam|Udung Uko|Ukanafun|Uruan|Urue-Offong/Oruko|Uyo|'
city_states['Anambra'] = '|Aguata|Anambra East|Anambra West|Anaocha|Awka North|Awka South|Ayamelum|Dunukofia|Ekwusigo|Idemili North|Idemili south|Ihiala|Njikoka|Nnewi North|Nnewi South|Ogbaru|Onitsha North|Onitsha South|Orumba North|Orumba South|Oyi|'
city_states['Bauchi'] = '|Alkaleri|Bauchi|Bogoro|Damban|Darazo|Dass|Ganjuwa|Giade|Itas/Gadau|Jama/are|Katagum|Kirfi|Misau|Ningi|Shira|Tafawa-Balewa|Toro|Warji|Zaki|'
city_states['Bayelsa'] = '|Brass|Ekeremor|Kolokuma/Opokuma|Nembe|Ogbia|Sagbama|Southern ijaw|Yenegoa|'
city_states['Benue'] = '|Ado|Agatu|Apa|Buruku|Gboko|Guma|Gwer East|Gwer West|Katsina-Ala|Konshisha|Kwande|Logo|Makurdi|Obi|Ogbadibo|Oju|Okpokwu|Ohimini|Oturkpo|Tarka|Tyorwanyeh|Ukum|Ushongo|Wanune|Vandeikya|'
city_states['Borno'] = '|Abadam|Askira/Uba|Bama|Bayo|Biu|Chibok|Damboa|Dikwa|Gubio|Guzamala|Gwoza|Hawul|Jere|Kaga|Kala/Balge|Konduga|Kukawa|Kwaya Kusar|Mafa|Magumeri|Maiduguri|Marte|Mobbar|Monguno|Ngala|Nganzai|Shani|'
city_states['Cross River'] = '|Akpabuyo|Odukpani|Akamkpa|Biase|Abi|Ikom|Yarkur|Obubra|Boki|Ogoja|Yala|Obanliku|Obudu|Calabar South|Etung|Bekwara|Bakassi|Calabar Municipality|'
city_states['Delta'] = '|Oshimili|Oshimili North|Patani|Aniocha|Aniocha South|Agbor|Ika South|Ika North-East|Ndokwa West|Ndokwa East|Isoko south|Isoko North|Bomadi|Burutu|Ughelli South|Ughelli North|Ethiope West|Ethiope East|Sapele|Okpe|Warri North|Warri South|Uvwie|Udu|Warri Central|Ukwani|'
city_states['Ebonyi'] = '|Afikpo South|Afikpo North|Onicha|Ohaozara|Abakaliki|Ishielu|lkwo|Ezza|Ezza South|Ohaukwu|Ebonyi|Ivo|'
city_states['Edo']  = '|Esan North-East|Esan Central|Esan West|Egor|Ukpoba|Central|Etsako Central|Igueben|Oredo|Ovia SouthWest|Ovia South-East|Orhionwon|Uhunmwonde|Etsako East|Esan South-East|'
city_states['Ekiti'] = '|Ado|Ekiti-East|Ekiti-West|Emure/Ise/Orun|Ekiti South-West|Ikere|Irepodun|Ijero|Ido/Osi|Oye|Ikole|Moba|Gbonyin|Efon-Alaaye|Ise/Orun|Ilejemeje|'
city_states['Enugu'] = '|Enugu South|Igbo-Eze South|Enugu North|Nkanu|Udi Agwu|Oji-River|Ezeagu|Igbo-Eze North|Isi-Uzo|Nsukka|Igbo-Etiti|Uzo-Uwani|Enugu East|Aninri|Nkanu East|Udenu|'
city_states['Gombe'] = '|Akko|Balanga|Billiri|Dukku|Kaltungo|Kwami|Shomgom|Funakaye|Gombe|Nafada/Bajoga|Yamaltu/Delta|'
city_states['Imo'] = '|Aboh-Mbaise|Ahiazu-Mbaise|Ehime-Mbano|Ezinihitte|Ideato North|Ideato South|Ihitte/Uboma|Ikeduru|Isiala Mbano|Isu|Mbaitoli|Ngor-Okpala|Njaba|Nwangele|Nkwerre|Obowo|Oguta|Ohaji/Egbema|Okigwe|Orlu|Orsu|Oru East|Oru West|Owerri-Municipal|Owerri North|Owerri West|'
city_states['Jigawa'] = '|Auyo|Babura|Birni Kudu|Biriniwa|Buji|Dutse|Gagarawa|Garki|Gumel|Guri|Gwaram|Gwiwa|Hadejia|Jahun|Kafin Hausa|Kaugama Kazaure|Kiri Kasamma|Kiyawa|Maigatari|Malam Madori|Miga|Ringim|Roni|Sule-Tankarkar|Taura|Yankwashi|'
city_states['Kaduna'] = '|Birni-Gwari|Chikun|Giwa|Igabi|Ikara|jaba|Jema\'a|Kachia|Kaduna North|Kaduna South|Kagarko|Kajuru|Kaura|Kauru|Kubau|Kudan|Lere|Makarfi|Sabon-Gari|Sanga|Soba|Zango-Kataf|Zaria|Television|Angwan-rimi|Angwan-boro|Angwan-dosa|Angwan-pama|Sabon tasha|Nasarawa|Kujama|Kawo|Mando|Abet|Zonkowa|Kafanchan|Kagoma|Gidan-waya|Kagoro|'
city_states['Kano'] = '|Ajingi|Albasu|Bagwai|Bebeji|Bichi|Bunkure|Dala|Dambatta|Dawakin Kudu|Dawakin Tofa|Doguwa|Fagge|Gabasawa|Garko|Garum|Mallam|Gaya|Gezawa|Gwale|Gwarzo|Kabo|Kano Municipal|Karaye|Kibiya|Kiru|kumbotso|Kunchi|Kura|Madobi|Makoda|Minjibir|Nasarawa|Rano|Rimin Gado|Rogo|Shanono|Sumaila|Takali|Tarauni|Tofa|Tsanyawa|Tudun Wada|Ungogo|Warawa|Wudil|'
city_states['Katsina'] = '|Bakori|Batagarawa|Batsari|Baure|Bindawa|Charanchi|Dandume|Danja|Dan Musa|Daura|Dutsi|Dutsin-Ma|Faskari|Funtua|Ingawa|Jibia|Kafur|Kaita|Kankara|Kankia|Katsina|Kurfi|Kusada|Mai\'Adua|Malumfashi|Mani|Mashi|Matazuu|Musawa|Rimi|Sabuwa|Safana|Sandamu|Zango|'
city_states['Kebbi'] = '|Aleiro|Arewa-Dandi|Argungu|Augie|Bagudo|Birnin Kebbi|Bunza|Dandi|Fakai|Gwandu|Jega|Kalgo|Koko/Besse|Maiyama||Ngaski|Sakaba|Shanga|Suru|Wasagu/Danko|Yauri|Zuru|'
city_states['Kogi'] = '|Adavi|Ajaokuta|Ankpa|Bassa|Dekina|Ibaji|Idah|Igalamela-Odolu|Ijumu|Kabba/Bunu|Kogi|Lokoja|Mopa-Muro|Ofu|Ogori/Mangongo|Okehi|Okene|Olamabolo|Omala|Yagba East|Yagba West|'
city_states['Kwara'] = '|Asa|Baruten|Edu|Ekiti|Ifelodun|Ilorin East|Ilorin West|Irepodun|Isin|Kaiama|Moro|Offa|Oke-Ero|Oyun|Pategi|'
city_states['Lagos'] = '|Agege|Ajeromi-Ifelodun|Alimosho|Amuwo-Odofin|Apapa|Badagry|Epe|Eti-Osa|Ibeju/Lekki|Ifako-Ijaye|Ikeja|Ikorodu|Kosofe|Lagos Island|Lagos Mainland|Ikota|Ikoyi|Victoria Island|Ajah|Mushin|Ojo|Oshodi-Isolo|Shomolu|Surulere|'
city_states['Nasarawa'] = '|Akwanga|Awe|Doma|Karu|Keana|Keffi|Kokona|Lafia|Nasarawa|Nasarawa-Eggon|Obi|Toto|Wamba|'
city_states['Niger'] = '|Agaie|Agwara|Bida|Borgu|Bosso|Chanchaga|Edati|Gbako|Gurara|Katcha|Kontagora|Lapai|Lavun|Magama|Mariga|Mashegu|Mokwa|Muya|Pailoro|Rafi|Rijau|Shiroro|Suleja|Tafa|Wushishi|'
city_states['Ogun']  = '|Abeokuta North|Abeokuta South|Ado-Odo/Ota|Egbado North|Egbado South|Ewekoro|Ifo|Ijebu East|Ijebu North|Ijebu North East|Ijebu Ode|Ikenne|Imeko-Afon|Ipokia|Obafemi-Owode|Ogun Waterside|Odeda|Odogbolu|Remo North|Shagamu|'
city_states['Ondo'] = '|Akoko North East|Akoko North West|Akoko South Akure East|Akoko South West|Akure North|Akure South|Ese-Odo|Idanre|Ifedore|Ilaje|Ile-Oluji|Okeigbo|Irele|Odigbo|Okitipupa|Ondo East|Ondo West|Ose|Owo|'
city_states['Osun'] = '|Aiyedade|Aiyedire|Atakumosa East|Atakumosa West|Boluwaduro|Boripe|Ede North|Ede South|Egbedore|Ejigbo|Ife Central|Ife East|Ife North|Ife South|Ifedayo|Ifelodun|Ila|Ilesha East|Ilesha West|Irepodun|Irewole|Isokan|Iwo|Obokun|Odo-Otin|Ola-Oluwa|Olorunda|Oriade|Orolu|Osogbo|'
city_states['Oyo'] = '|Afijio|Akinyele|Atiba|Atigbo|Egbeda|Ibadan Central|Ibadan North|Ibadan North West|Ibadan South East|Ibadan South West|Ibarapa Central|Ibarapa East|Ibarapa North|Ido|Irepo|Iseyin|Itesiwaju|Iwajowa|Kajola|Lagelu Ogbomosho North|Ogbmosho South|Ogo Oluwa|Olorunsogo|Oluyole|Ona-Ara|Orelope|Ori Ire|Oyo East|Oyo West|Saki East|Saki West|Surulere|'
city_states['Plateau'] = '|Barkin Ladi|Bassa|Bokkos|Jos East|Jos North|Jos South|Kanam|Kanke|Langtang North|Langtang South|Mangu|Mikang|Pankshin|Qua\'an Pan|Riyom|Shendam|Wase|'
city_states['Rivers'] = '|Abua/Odual|Ahoada East|Ahoada West|Akuku-Toru|Andoni|Asari-Toru|Bonny|Choba|Degema|Emohua|Eleme|Etche|Gokana|Ikwerre|Khana|Obia/Akpor|Ogba/Egbema/Ndoni|Ogu/Bolo|Okrika|Omumma|Opobo/Nkoro|Oyigbo|Port-Harcourt|Tai|'
city_states['Sokoto'] = '|Binji|Bodinga|Dange-shuni|Gada|Goronyo|Gudu|Gawabawa|Illela|Isa|Kware|kebbe|Rabah|Sabon birni|Shagari|Silame|Sokoto North|Sokoto South|Tambuwal|Tangaza|Tureta|Wamako|Wurno|Yabo|'
city_states['Taraba'] = '|Ardo-kola|Bali|Donga|Gashaka|Cassol|Ibi|Jalingo|Karin-Lamido|Kurmi|Lau|Sardauna|Takum|Ussa|Wukari|Yorro|Zing|'
city_states['Yobe'] = '|Bade|Bursari|Damaturu|Fika|Fune|Geidam|Gujba|Gulani|Jakusko|Karasuwa|Karawa|Machina|Nangere|Nguru Potiskum|Tarmua|Yunusari|Yusufari|'
city_states['Zamfara'] = '|Anka|Bakura|Birnin Magaji|Bukkuyum|Bungudu|Gummi|Gusau|Kaura|Namoda|Maradun|Maru|Shinkafi|Talata Mafara|Tsafe|Zurmi|'
city_states['FCT'] = '|Gwagwalada|Kuje|Abaji|Abuja Municipal|Bwari|Kwali|Maitama|Wuse|Kubwa|Gwarimpa|'

function setCountry()
{
	for (country in states)
		document.write('<option value="' + country + '">'  + country + '</option>');
}

function set_states(oCountrySel, oStateSel, oCitySel)
{
	var stateArr;
	oStateSel.length = 0;
	oCitySel.length = 0;
	var country = oCountrySel.options[oCountrySel.selectedIndex].text;
	if (states[country])
	{
		oStateSel.disabled = false;
		oCitySel.disabled = true;
		oStateSel.options[0] = new Option('-Select State-','');
		stateArr = states[country].split('|');
		for (var i = 0; i < stateArr.length; i++)
			oStateSel.options[i + 1] = new Option(stateArr[i], stateArr[i]);
		document.getElementById('txtcountry').innerHTML = country;
		document.getElementById('txtplacename').innerHTML = '';
	}
	else oStateSel.disabled = true;
}

function set_city(oStateSel, oCitySel)
{
	var cityArr;
	oCitySel.length = 0;
	var state = oStateSel.options[oStateSel.selectedIndex].text;
	if (city_states[state])
	{
		oCitySel.disabled = false;
		oCitySel.options[0] = new Option('-Select City-','');
		cityArr = city_states[state].split('|');
		for (var i = 0; i < cityArr.length; i++)
			oCitySel.options[i+1] = new Option(cityArr[i],cityArr[i]);
		document.getElementById('txtplacename').innerHTML = state;
	}
	else oCitySel.disabled = true;
}

function print_city(oStateSel, oCitySel)
{
	var state = oStateSel.options[oStateSel.selectedIndex].text;
	var city = oCitySel.options[oCitySel.selectedIndex].text;
	if (city && city_states[state].indexOf(city) != -1)
		document.getElementById('txtplacename').innerHTML = city + ', ' + state;
	else document.getElementById('txtplacename').innerHTML = state;
}