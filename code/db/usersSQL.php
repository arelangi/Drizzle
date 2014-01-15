<?php 

	mysql_connect('127.0.0.1','developer','developer')or die(mysql_error());

        mysql_select_db('drizzle')
         or die(mysql_error());

	$jsonString = '[
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "ms",
				                "first": "christine",
				                "last": "gray"
				            },
				            "location": {
				                "street": "2050 nowlin rd",
				                "city": "lousville",
				                "state": "vermont",
				                "zip": "22283"
				            },
				            "email": "christine.gray72@example.com",
				            "password": "spider1",
				            "md5_hash": "50de237e389600acadbeda3d6e6e0b1f",
				            "sha1_hash": "c3c3707c81aeb1b5c623d297ffffe7697fa9ead2",
				            "phone": "(885)-143-9280",
				            "cell": "(122)-707-3956",
				            "SSN": "846-41-6871",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/30.jpg"
				        },
				        "seed": "9696536876cae93",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "connor",
				                "last": "taylor"
				            },
				            "location": {
				                "street": "8234 w 6th st",
				                "city": "sunnyvale",
				                "state": "kansas",
				                "zip": "37220"
				            },
				            "email": "connor.taylor36@example.com",
				            "password": "whitey",
				            "md5_hash": "7d74679d431fb4a762fecd32650d72af",
				            "sha1_hash": "92e1b25f0192039f7c9cb3bda2986a86381b3f7d",
				            "phone": "(275)-748-7939",
				            "cell": "(180)-327-8281",
				            "SSN": "546-70-5776",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/40.jpg"
				        },
				        "seed": "3b283de67f91a2f",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "larry",
				                "last": "williams"
				            },
				            "location": {
				                "street": "3317 w gray st",
				                "city": "waxahachie",
				                "state": "new jersey",
				                "zip": "76433"
				            },
				            "email": "larry.williams63@example.com",
				            "password": "kitten",
				            "md5_hash": "6da89cd09ab7937478a1d47d20938536",
				            "sha1_hash": "44060752d7f7ae069c8187120455195325af0cca",
				            "phone": "(201)-915-9647",
				            "cell": "(156)-241-3089",
				            "SSN": "459-26-5827",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/9.jpg"
				        },
				        "seed": "7186516798da085",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "ms",
				                "first": "alexis",
				                "last": "brooks"
				            },
				            "location": {
				                "street": "1600 hogan st",
				                "city": "lexington",
				                "state": "indiana",
				                "zip": "50710"
				            },
				            "email": "alexis.brooks52@example.com",
				            "password": "clock",
				            "md5_hash": "05531b19bb846b18c09f979eeb429ad3",
				            "sha1_hash": "83655a5560ef1c438170f28acfecbe5013e8f34f",
				            "phone": "(133)-939-9120",
				            "cell": "(317)-891-7541",
				            "SSN": "350-78-7405",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/27.jpg"
				        },
				        "seed": "6f6636f60876ea7",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "miss",
				                "first": "alice",
				                "last": "hall"
				            },
				            "location": {
				                "street": "6851 dane st",
				                "city": "richardson",
				                "state": "iowa",
				                "zip": "47746"
				            },
				            "email": "alice.hall99@example.com",
				            "password": "stanton",
				            "md5_hash": "772a620a2f94d86ca19e610bdd7c6892",
				            "sha1_hash": "ec797a495bd75d304a48166671fbdbb584034018",
				            "phone": "(456)-200-5073",
				            "cell": "(789)-314-5645",
				            "SSN": "774-24-1288",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/33.jpg"
				        },
				        "seed": "2ff19338f2f779f",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "miss",
				                "first": "shannon",
				                "last": "hamilton"
				            },
				            "location": {
				                "street": "2385 wheeler ridge dr",
				                "city": "desoto",
				                "state": "illinois",
				                "zip": "33121"
				            },
				            "email": "shannon.hamilton69@example.com",
				            "password": "test",
				            "md5_hash": "098f6bcd4621d373cade4e832627b4f6",
				            "sha1_hash": "a94a8fe5ccb19ba61c4c0873d391e987982fbbd3",
				            "phone": "(505)-999-9077",
				            "cell": "(633)-326-4272",
				            "SSN": "135-81-5256",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/34.jpg"
				        },
				        "seed": "5f1d21df3ba2e27",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "ms",
				                "first": "isabella",
				                "last": "jenkins"
				            },
				            "location": {
				                "street": "7235 pockrus page rd",
				                "city": "columbus",
				                "state": "minnesota",
				                "zip": "64472"
				            },
				            "email": "isabella.jenkins49@example.com",
				            "password": "gsxr750",
				            "md5_hash": "ec1ffa08791e0ae7811f924ff86f1600",
				            "sha1_hash": "732a94d8007850957c6d4ae46c634b80bd9c4fa1",
				            "phone": "(331)-110-5088",
				            "cell": "(859)-603-4799",
				            "SSN": "813-17-2701",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/0.jpg"
				        },
				        "seed": "a5bab3b9c33a597",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "miss",
				                "first": "andrea",
				                "last": "murphy"
				            },
				            "location": {
				                "street": "5755 plum st",
				                "city": "colorado springs",
				                "state": "new york",
				                "zip": "49802"
				            },
				            "email": "andrea.murphy33@example.com",
				            "password": "impact",
				            "md5_hash": "05199deca16614131327f2c3fea9031c",
				            "sha1_hash": "a9a581005e9634da2fb41686ddb90a2edb9cbdc4",
				            "phone": "(257)-111-8253",
				            "cell": "(877)-886-9552",
				            "SSN": "789-16-8199",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/30.jpg"
				        },
				        "seed": "5c2e4ab4e14267d",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "mrs",
				                "first": "erica",
				                "last": "wilson"
				            },
				            "location": {
				                "street": "1494 woodland st",
				                "city": "pittsburgh",
				                "state": "utah",
				                "zip": "21182"
				            },
				            "email": "erica.wilson95@example.com",
				            "password": "barrett",
				            "md5_hash": "5b1424225ff2a849e2462042370c5e30",
				            "sha1_hash": "3292b34d35bcaca94cecc87fe8942b51c77c647f",
				            "phone": "(392)-646-9957",
				            "cell": "(482)-847-5698",
				            "SSN": "505-76-2091",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/24.jpg"
				        },
				        "seed": "abd932db1ddc3fa",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "joe",
				                "last": "edwards"
				            },
				            "location": {
				                "street": "3391 marsh ln",
				                "city": "yakima",
				                "state": "maine",
				                "zip": "44664"
				            },
				            "email": "joe.edwards50@example.com",
				            "password": "rasputin",
				            "md5_hash": "1359e39dc07ed5768adfe1b1209b8e55",
				            "sha1_hash": "6662165385ea358c56a090a913016f54805b0cfb",
				            "phone": "(156)-630-1209",
				            "cell": "(705)-474-9195",
				            "SSN": "795-69-2553",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/43.jpg"
				        },
				        "seed": "33606ba43c60d9a",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "ritthy",
				                "last": "griffin"
				            },
				            "location": {
				                "street": "1203 spring st",
				                "city": "fort collins",
				                "state": "iawaii",
				                "zip": "45525"
				            },
				            "email": "ritthy.griffin52@example.com",
				            "password": "squeeze",
				            "md5_hash": "c695be4ac9d9282355db8c412a4d0a84",
				            "sha1_hash": "a1259b421aa7044914301832f5d46d49550ff843",
				            "phone": "(714)-999-7041",
				            "cell": "(314)-316-8456",
				            "SSN": "353-24-7428",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/14.jpg"
				        },
				        "seed": "bbacb2d58ca87ea",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "alexander",
				                "last": "scott"
				            },
				            "location": {
				                "street": "2390 e center st",
				                "city": "vernon",
				                "state": "colorado",
				                "zip": "26196"
				            },
				            "email": "alexander.scott33@example.com",
				            "password": "access",
				            "md5_hash": "9df3b01c60df20d13843841ff0d4482c",
				            "sha1_hash": "0f12541afcce175fb34bb05a79c95b76e765488b",
				            "phone": "(170)-515-2439",
				            "cell": "(687)-348-5730",
				            "SSN": "803-51-9993",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/6.jpg"
				        },
				        "seed": "3d1d3e38cd888ec",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "mrs",
				                "first": "andrea",
				                "last": "lee"
				            },
				            "location": {
				                "street": "6387 lakeshore rd",
				                "city": "fort collins",
				                "state": "wisconsin",
				                "zip": "32136"
				            },
				            "email": "andrea.lee63@example.com",
				            "password": "redfish",
				            "md5_hash": "6d30703c304d67daeabde69f08b445f9",
				            "sha1_hash": "9de4d26beeb371067898f0cb7789278e8be8f3a9",
				            "phone": "(918)-159-7955",
				            "cell": "(467)-486-2299",
				            "SSN": "506-10-1864",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/19.jpg"
				        },
				        "seed": "46e2cb5c018a7d7",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "carter",
				                "last": "wright"
				            },
				            "location": {
				                "street": "5092 camden ave",
				                "city": "cupertino",
				                "state": "alaska",
				                "zip": "72528"
				            },
				            "email": "carter.wright93@example.com",
				            "password": "smelly",
				            "md5_hash": "f4757ea84c455b04a1d307d4ac33049d",
				            "sha1_hash": "3ecefae19fbedb88082f6424d055ea5ca2dd344d",
				            "phone": "(416)-792-6065",
				            "cell": "(758)-333-9920",
				            "SSN": "345-57-2130",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/47.jpg"
				        },
				        "seed": "f8ac4e97e718b14",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "soham",
				                "last": "stewart"
				            },
				            "location": {
				                "street": "7091 wycliff ave",
				                "city": "eugene",
				                "state": "missouri",
				                "zip": "59638"
				            },
				            "email": "soham.stewart29@example.com",
				            "password": "delaney",
				            "md5_hash": "f3b48e61e10e1291e62af55ee2cbae6d",
				            "sha1_hash": "1b58ed160504447284693e0d0628c4b8978943f6",
				            "phone": "(183)-223-2068",
				            "cell": "(225)-949-4087",
				            "SSN": "506-88-6565",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/46.jpg"
				        },
				        "seed": "105379ed8ccc036",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "brennan",
				                "last": "allen"
				            },
				            "location": {
				                "street": "7387 dane st",
				                "city": "evansville",
				                "state": "texas",
				                "zip": "27305"
				            },
				            "email": "brennan.allen29@example.com",
				            "password": "daniels",
				            "md5_hash": "7cd068f5aeb8deff0ec5a97d4bd82ccc",
				            "sha1_hash": "62e7e355d5d8400fa8384448796af0bf6be4ffae",
				            "phone": "(645)-668-8889",
				            "cell": "(676)-758-7840",
				            "SSN": "688-72-2031",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/38.jpg"
				        },
				        "seed": "acdf84460c2f97b",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "miss",
				                "first": "savannah",
				                "last": "harris"
				            },
				            "location": {
				                "street": "4787 saddle dr",
				                "city": "dayton",
				                "state": "california",
				                "zip": "21000"
				            },
				            "email": "savannah.harris68@example.com",
				            "password": "technics",
				            "md5_hash": "7a1ef70e88d8af7b53d1533f9e82be4f",
				            "sha1_hash": "ef737650f52acd8dfa72fd73f7fe3b0f1289fcd2",
				            "phone": "(395)-632-4071",
				            "cell": "(430)-867-3094",
				            "SSN": "221-23-6852",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/34.jpg"
				        },
				        "seed": "fad5f0b3c5556e0",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "harold",
				                "last": "jackson"
				            },
				            "location": {
				                "street": "6397 groveland terrace",
				                "city": "coppell",
				                "state": "pennsylvania",
				                "zip": "34812"
				            },
				            "email": "harold.jackson18@example.com",
				            "password": "smokie",
				            "md5_hash": "2d5f5f62d9f3bec256e79170323c14c2",
				            "sha1_hash": "5b5515decdf591d59209d1d31849c64887de34c0",
				            "phone": "(112)-521-9361",
				            "cell": "(827)-300-3069",
				            "SSN": "602-44-9360",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/29.jpg"
				        },
				        "seed": "e893e5ab29f5142",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "mrs",
				                "first": "aubree",
				                "last": "anderson"
				            },
				            "location": {
				                "street": "2814 hickory creek dr",
				                "city": "redding",
				                "state": "alaska",
				                "zip": "44698"
				            },
				            "email": "aubree.anderson42@example.com",
				            "password": "dani",
				            "md5_hash": "55b7e8b895d047537e672250dd781555",
				            "sha1_hash": "3f547476e0ce8e681ded188f0322a4d5e0d56ec4",
				            "phone": "(329)-918-3268",
				            "cell": "(600)-443-2031",
				            "SSN": "419-92-7642",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/31.jpg"
				        },
				        "seed": "c738e77027f3f46",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "lucas",
				                "last": "ramirez"
				            },
				            "location": {
				                "street": "4683 e little york rd",
				                "city": "cupertino",
				                "state": "massachusetts",
				                "zip": "71543"
				            },
				            "email": "lucas.ramirez37@example.com",
				            "password": "cooking",
				            "md5_hash": "739b1f3a9bd2a0f35f2752d367af3107",
				            "sha1_hash": "c2c1a1062d882a63ac9feba30087514409dd3856",
				            "phone": "(192)-366-1462",
				            "cell": "(676)-543-8109",
				            "SSN": "880-26-6309",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/27.jpg"
				        },
				        "seed": "6b4caa1e6d76a04",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "gavin",
				                "last": "martinez"
				            },
				            "location": {
				                "street": "6779 homestead rd",
				                "city": "spokane",
				                "state": "new jersey",
				                "zip": "30839"
				            },
				            "email": "gavin.martinez50@example.com",
				            "password": "alpha1",
				            "md5_hash": "8dbc2828a56856fc152437bd551628b5",
				            "sha1_hash": "c549f08c6cbfdb589d50e2e76750e85f215da659",
				            "phone": "(434)-172-9051",
				            "cell": "(686)-598-8798",
				            "SSN": "508-33-4670",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/47.jpg"
				        },
				        "seed": "b2b788df0e884e4",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "miss",
				                "first": "genesis",
				                "last": "thompson"
				            },
				            "location": {
				                "street": "6019 lovers ln",
				                "city": "celina",
				                "state": "indiana",
				                "zip": "50819"
				            },
				            "email": "genesis.thompson44@example.com",
				            "password": "jorge",
				            "md5_hash": "d67326a22642a324aa1b0745f2f17abb",
				            "sha1_hash": "33f927344e079e00d3fa45d8833b04e735223eec",
				            "phone": "(277)-709-5265",
				            "cell": "(978)-889-9730",
				            "SSN": "340-50-1000",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/2.jpg"
				        },
				        "seed": "af1eec67e2b98bd",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "miss",
				                "first": "sophia",
				                "last": "garcia"
				            },
				            "location": {
				                "street": "7803 daisy dr",
				                "city": "red bluff",
				                "state": "west virginia",
				                "zip": "32258"
				            },
				            "email": "sophia.garcia49@example.com",
				            "password": "nipper",
				            "md5_hash": "261adbabdff727c3ba8a9d90e7e4efe5",
				            "sha1_hash": "f612c4236b2d96dbf1a7020e083a23de8b010714",
				            "phone": "(407)-562-1834",
				            "cell": "(374)-960-6403",
				            "SSN": "443-62-9285",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/3.jpg"
				        },
				        "seed": "3526de8a65e92a5",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "ms",
				                "first": "savannah",
				                "last": "price"
				            },
				            "location": {
				                "street": "8285 karen dr",
				                "city": "bueblo",
				                "state": "minnesota",
				                "zip": "46593"
				            },
				            "email": "savannah.price34@example.com",
				            "password": "toast",
				            "md5_hash": "4f2900f2fdfaf3f77bd599391218f49f",
				            "sha1_hash": "2d885aa81d3cfb040d3e29f570f8c8855beae0f1",
				            "phone": "(575)-817-6792",
				            "cell": "(801)-643-7920",
				            "SSN": "563-49-9175",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/26.jpg"
				        },
				        "seed": "ede5d4402a30f7a",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "mrs",
				                "first": "scarlett",
				                "last": "garcia"
				            },
				            "location": {
				                "street": "8560 w sherman dr",
				                "city": "seattle",
				                "state": "connecticut",
				                "zip": "46979"
				            },
				            "email": "scarlett.garcia55@example.com",
				            "password": "erin",
				            "md5_hash": "5f5be3890fa875bfe8fa797b4ba6a397",
				            "sha1_hash": "2a4b17b11682b229726079a631360cf016a43450",
				            "phone": "(140)-534-5575",
				            "cell": "(534)-542-4657",
				            "SSN": "747-91-3553",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/21.jpg"
				        },
				        "seed": "ecadca744192d8e",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "elijah",
				                "last": "griffin"
				            },
				            "location": {
				                "street": "8297 w pecan st",
				                "city": "duncanville",
				                "state": "massachusetts",
				                "zip": "12100"
				            },
				            "email": "elijah.griffin72@example.com",
				            "password": "emmett",
				            "md5_hash": "68ef868f86c1107f66d4ef4c4610e930",
				            "sha1_hash": "cfe6b4cfb397dbfddba39066e35893dede7e204d",
				            "phone": "(336)-790-4590",
				            "cell": "(176)-133-5506",
				            "SSN": "396-16-9587",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/16.jpg"
				        },
				        "seed": "c6e39bcd13a1b4d",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "mrs",
				                "first": "harper",
				                "last": "thompson"
				            },
				            "location": {
				                "street": "1510 prospect rd",
				                "city": "lexington",
				                "state": "idaho",
				                "zip": "66136"
				            },
				            "email": "harper.thompson41@example.com",
				            "password": "alien",
				            "md5_hash": "273910799eacaacec06aba83c9d54906",
				            "sha1_hash": "f9965239005f50b3eee8d3c472b9ecf014ea8588",
				            "phone": "(335)-169-2792",
				            "cell": "(780)-902-7032",
				            "SSN": "786-46-5040",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/28.jpg"
				        },
				        "seed": "c378af3789d68dc",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "ms",
				                "first": "chloe",
				                "last": "king"
				            },
				            "location": {
				                "street": "3319 lakeshore rd",
				                "city": "yakima",
				                "state": "north carolina",
				                "zip": "65698"
				            },
				            "email": "chloe.king74@example.com",
				            "password": "haley",
				            "md5_hash": "85e0728d4709145839d6ccf8640ca57a",
				            "sha1_hash": "01cb6148c645822f9a870d3ac20d496c05b6b217",
				            "phone": "(363)-490-9704",
				            "cell": "(452)-751-2971",
				            "SSN": "276-71-6654",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/5.jpg"
				        },
				        "seed": "707360d1aaa1d60",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "noah",
				                "last": "martin"
				            },
				            "location": {
				                "street": "1362 oak ridge ln",
				                "city": "stockton",
				                "state": "georgia",
				                "zip": "58156"
				            },
				            "email": "noah.martin44@example.com",
				            "password": "weaver",
				            "md5_hash": "758058d8987e7a9ec723bcdbec6c407e",
				            "sha1_hash": "30d170e852c12a13d1ea8732ed6dcc57c502f8d4",
				            "phone": "(413)-528-8496",
				            "cell": "(825)-500-4226",
				            "SSN": "729-43-7483",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/15.jpg"
				        },
				        "seed": "19f1e71f751ebe0",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "richard",
				                "last": "jones"
				            },
				            "location": {
				                "street": "1675 hickory creek dr",
				                "city": "nampa",
				                "state": "mississippi",
				                "zip": "22958"
				            },
				            "email": "richard.jones56@example.com",
				            "password": "bouncer",
				            "md5_hash": "2a2dd8b31119acbf325cf646ff7c4461",
				            "sha1_hash": "cc8a81a5d392c34260f000f0e300b6684d0f6677",
				            "phone": "(950)-216-8705",
				            "cell": "(808)-320-5160",
				            "SSN": "535-18-8038",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/24.jpg"
				        },
				        "seed": "64ee2363a169136",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "kenneth",
				                "last": "murphy"
				            },
				            "location": {
				                "street": "4035 w 6th st",
				                "city": "new haven",
				                "state": "idaho",
				                "zip": "57830"
				            },
				            "email": "kenneth.murphy96@example.com",
				            "password": "963852",
				            "md5_hash": "a45fdb1e4ac646c9e65a1769663e5704",
				            "sha1_hash": "1675f0843189a2dff0771ac8f0264845b0cdae91",
				            "phone": "(128)-532-6382",
				            "cell": "(332)-333-4931",
				            "SSN": "176-36-1823",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/10.jpg"
				        },
				        "seed": "7b6a28a332833a4",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "jacob",
				                "last": "cook"
				            },
				            "location": {
				                "street": "4651 prospect rd",
				                "city": "cleveland",
				                "state": "nebraska",
				                "zip": "14593"
				            },
				            "email": "jacob.cook51@example.com",
				            "password": "concord",
				            "md5_hash": "5b0ffbd3218541ee7a1587fcc6de565a",
				            "sha1_hash": "5e3dd983c2dde255c6d1f820b8d790270717136b",
				            "phone": "(927)-131-8268",
				            "cell": "(130)-880-9241",
				            "SSN": "948-77-7108",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/41.jpg"
				        },
				        "seed": "155c926e49fad07",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "mrs",
				                "first": "zoe",
				                "last": "lee"
				            },
				            "location": {
				                "street": "7844 hamilton ave",
				                "city": "rochester",
				                "state": "california",
				                "zip": "18262"
				            },
				            "email": "zoe.lee80@example.com",
				            "password": "python",
				            "md5_hash": "23eeeb4347bdd26bfc6b7ee9a3b755dd",
				            "sha1_hash": "4235227b51436ad86d07c7cf5d69bda2644984de",
				            "phone": "(968)-761-2741",
				            "cell": "(308)-917-5437",
				            "SSN": "504-54-1489",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/25.jpg"
				        },
				        "seed": "829e3b883f63e39",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "soham",
				                "last": "howard"
				            },
				            "location": {
				                "street": "4741 royal ln",
				                "city": "grand prairie",
				                "state": "wyoming",
				                "zip": "37673"
				            },
				            "email": "soham.howard75@example.com",
				            "password": "boxcar",
				            "md5_hash": "3600df93a6deccddd1e104e29d1040ca",
				            "sha1_hash": "51a2c974200bbad370bb847cc9ac6af1efa25ac9",
				            "phone": "(319)-785-6613",
				            "cell": "(841)-599-9289",
				            "SSN": "861-99-6005",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/25.jpg"
				        },
				        "seed": "f63d60033da916c",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "richard",
				                "last": "martin"
				            },
				            "location": {
				                "street": "3193 country club rd",
				                "city": "rochmond",
				                "state": "west virginia",
				                "zip": "49602"
				            },
				            "email": "richard.martin32@example.com",
				            "password": "poker",
				            "md5_hash": "de46d487ba166381e4952d3449cb4936",
				            "sha1_hash": "b662eddb4059d333b6ce57f6279154f8eea507f1",
				            "phone": "(325)-734-9266",
				            "cell": "(664)-766-4742",
				            "SSN": "359-94-9382",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/41.jpg"
				        },
				        "seed": "3c8efb9a0152e11",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "steven",
				                "last": "rivera"
				            },
				            "location": {
				                "street": "4007 oak ridge ln",
				                "city": "edgewood",
				                "state": "california",
				                "zip": "52429"
				            },
				            "email": "steven.rivera16@example.com",
				            "password": "nicola",
				            "md5_hash": "aebe79a00a0e81dc288034f271d27a13",
				            "sha1_hash": "b7a80975b6dec883cec058ef7c9b8e95fb341605",
				            "phone": "(642)-766-2075",
				            "cell": "(695)-707-1044",
				            "SSN": "525-73-5167",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/10.jpg"
				        },
				        "seed": "7a89d1875350b7d",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "brian",
				                "last": "davis"
				            },
				            "location": {
				                "street": "2746 shady ln dr",
				                "city": "albuquerque",
				                "state": "louisiana",
				                "zip": "80108"
				            },
				            "email": "brian.davis65@example.com",
				            "password": "newcastl",
				            "md5_hash": "3b9f7e427d3a1255b83f92edd5cc9419",
				            "sha1_hash": "686672700f1d05fb84b8825bc7ad763ce2536dcb",
				            "phone": "(704)-672-9236",
				            "cell": "(765)-374-4428",
				            "SSN": "246-47-3718",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/34.jpg"
				        },
				        "seed": "50708484cfba889",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "miss",
				                "first": "leah",
				                "last": "campbell"
				            },
				            "location": {
				                "street": "5440 nowlin rd",
				                "city": "charlotte",
				                "state": "connecticut",
				                "zip": "26909"
				            },
				            "email": "leah.campbell80@example.com",
				            "password": "bunghole",
				            "md5_hash": "714ec33505398579513799e3730dcda1",
				            "sha1_hash": "4eb4923f15869796c5a6e70256612c0a20596a17",
				            "phone": "(347)-882-1497",
				            "cell": "(571)-684-8747",
				            "SSN": "596-97-9888",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/15.jpg"
				        },
				        "seed": "e9a294ab0bfd5d1",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "ms",
				                "first": "anna",
				                "last": "watson"
				            },
				            "location": {
				                "street": "4238 w campbell ave",
				                "city": "denver",
				                "state": "texas",
				                "zip": "58085"
				            },
				            "email": "anna.watson94@example.com",
				            "password": "gilbert",
				            "md5_hash": "e14c4ec12adad2f00980d8da23864c97",
				            "sha1_hash": "09c7f81ed4b62368a4156bcbbefd58860ec5a4f9",
				            "phone": "(785)-113-6059",
				            "cell": "(838)-593-9977",
				            "SSN": "222-37-5479",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/13.jpg"
				        },
				        "seed": "10f6980b0b0711d",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "ms",
				                "first": "grace",
				                "last": "king"
				            },
				            "location": {
				                "street": "2820 lone wolf trail",
				                "city": "colorado springs",
				                "state": "missouri",
				                "zip": "56725"
				            },
				            "email": "grace.king78@example.com",
				            "password": "gore",
				            "md5_hash": "ae9121ad0860c251ff3c565654b00abc",
				            "sha1_hash": "cb19c571932ec5e21e24e00681784f57ddd097b1",
				            "phone": "(441)-810-8954",
				            "cell": "(790)-812-2018",
				            "SSN": "274-32-8648",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/8.jpg"
				        },
				        "seed": "c9d9af0ef2aecab",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "ethan",
				                "last": "parker"
				            },
				            "location": {
				                "street": "8688 first street",
				                "city": "bernalillo",
				                "state": "new hampshire",
				                "zip": "46463"
				            },
				            "email": "ethan.parker29@example.com",
				            "password": "whitney",
				            "md5_hash": "5efd5935913b175e4ea16e9bd9b6f53a",
				            "sha1_hash": "c0b142195b8574219fbffa1ee5781045a1edf2a2",
				            "phone": "(819)-536-7299",
				            "cell": "(706)-705-7054",
				            "SSN": "448-91-6113",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/35.jpg"
				        },
				        "seed": "414843ae2ca69ec",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "mrs",
				                "first": "chloe",
				                "last": "diaz"
				            },
				            "location": {
				                "street": "8808 wycliff ave",
				                "city": "eureka",
				                "state": "arkansas",
				                "zip": "21897"
				            },
				            "email": "chloe.diaz69@example.com",
				            "password": "santos",
				            "md5_hash": "114fdfefd3d69799f0b6f73ef764d405",
				            "sha1_hash": "937bfaea6b875d17a48b0e4b499c346e56c4ca1c",
				            "phone": "(381)-113-9550",
				            "cell": "(877)-551-3110",
				            "SSN": "974-70-6883",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/5.jpg"
				        },
				        "seed": "9b63c6e9707722d",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "samuel",
				                "last": "morgan"
				            },
				            "location": {
				                "street": "1283 spring st",
				                "city": "colorado springs",
				                "state": "maine",
				                "zip": "31497"
				            },
				            "email": "samuel.morgan61@example.com",
				            "password": "shou",
				            "md5_hash": "a0a00cee4a1c15c8e2050d793cffa82d",
				            "sha1_hash": "cd97cd8dcf06e79e846358ab31f94a86df9b156c",
				            "phone": "(148)-287-6119",
				            "cell": "(707)-598-9605",
				            "SSN": "293-34-7570",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/25.jpg"
				        },
				        "seed": "df3f3a2bfe32228",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "ms",
				                "first": "sandra",
				                "last": "diaz"
				            },
				            "location": {
				                "street": "3456 eason rd",
				                "city": "caldwell",
				                "state": "west virginia",
				                "zip": "62586"
				            },
				            "email": "sandra.diaz24@example.com",
				            "password": "crimson",
				            "md5_hash": "5fa3ccc64c973db27e9fcade0810423e",
				            "sha1_hash": "ad5333beb0b6fda50a0eac3528495b97fc4b9902",
				            "phone": "(905)-193-5168",
				            "cell": "(280)-847-2684",
				            "SSN": "744-65-3380",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/25.jpg"
				        },
				        "seed": "6a8ebb74c42cb24",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "henry",
				                "last": "edwards"
				            },
				            "location": {
				                "street": "6496 preston rd",
				                "city": "akron",
				                "state": "utah",
				                "zip": "67798"
				            },
				            "email": "henry.edwards61@example.com",
				            "password": "lulu",
				            "md5_hash": "654e4dc5b90b7478671fe6448cab3f32",
				            "sha1_hash": "4ec844dae165816ebad5cb5ed77840e2484047d6",
				            "phone": "(362)-148-9343",
				            "cell": "(633)-684-1778",
				            "SSN": "475-21-7771",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/21.jpg"
				        },
				        "seed": "06b58ad33abd06f",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "dylan",
				                "last": "cox"
				            },
				            "location": {
				                "street": "8375 pockrus page rd",
				                "city": "san diego",
				                "state": "new york",
				                "zip": "63336"
				            },
				            "email": "dylan.cox55@example.com",
				            "password": "654321",
				            "md5_hash": "c33367701511b4f6020ec61ded352059",
				            "sha1_hash": "dd5fef9c1c1da1394d6d34b248c51be2ad740840",
				            "phone": "(348)-867-8561",
				            "cell": "(467)-725-8994",
				            "SSN": "401-40-5373",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/47.jpg"
				        },
				        "seed": "39be8ed832889d7",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "jeffery",
				                "last": "hughes"
				            },
				            "location": {
				                "street": "2074 oak ridge ln",
				                "city": "indianapolis",
				                "state": "new hampshire",
				                "zip": "54858"
				            },
				            "email": "jeffery.hughes83@example.com",
				            "password": "glory",
				            "md5_hash": "db2545515c456c8ff5d2ba3c474838e3",
				            "sha1_hash": "68880c1b70aeeb596c91bc192b9064f157445353",
				            "phone": "(768)-104-6779",
				            "cell": "(729)-781-2890",
				            "SSN": "996-41-6313",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/3.jpg"
				        },
				        "seed": "3cab596142850ab",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "mason",
				                "last": "powell"
				            },
				            "location": {
				                "street": "5289 poplar dr",
				                "city": "roanoke",
				                "state": "minnesota",
				                "zip": "79835"
				            },
				            "email": "mason.powell50@example.com",
				            "password": "caddy",
				            "md5_hash": "aeafa7587164f720f586c0f469a24529",
				            "sha1_hash": "f5bf150b783a7a046ac24aeb83a5129222b110c2",
				            "phone": "(232)-164-6882",
				            "cell": "(518)-173-3086",
				            "SSN": "403-52-4985",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/0.jpg"
				        },
				        "seed": "3784a4d32b3b9bb",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "female",
				            "name": {
				                "title": "miss",
				                "first": "lillian",
				                "last": "brooks"
				            },
				            "location": {
				                "street": "3278 hunters creek dr",
				                "city": "tacoma",
				                "state": "louisiana",
				                "zip": "17604"
				            },
				            "email": "lillian.brooks40@example.com",
				            "password": "123abc",
				            "md5_hash": "a906449d5769fa7361d7ecc6aa3f6d28",
				            "sha1_hash": "4be30d9814c6d4e9800e0d2ea9ec9fb00efa887b",
				            "phone": "(677)-877-9365",
				            "cell": "(114)-434-1162",
				            "SSN": "417-53-3501",
				            "picture": "http://api.randomuser.me/0.2/portraits/women/31.jpg"
				        },
				        "seed": "d9f0f9cb040cfe2",
				        "version": "0.2.1"
				    },
				    {
				        "user": {
				            "gender": "male",
				            "name": {
				                "title": "mr",
				                "first": "mason",
				                "last": "garcia"
				            },
				            "location": {
				                "street": "4305 eason rd",
				                "city": "tacoma",
				                "state": "montana",
				                "zip": "49570"
				            },
				            "email": "mason.garcia64@example.com",
				            "password": "momo",
				            "md5_hash": "06c56a89949d617def52f371c357b6db",
				            "sha1_hash": "77add44f8f13cf5b3298a7833613aca42430386d",
				            "phone": "(944)-475-7406",
				            "cell": "(584)-338-9672",
				            "SSN": "189-42-9836",
				            "picture": "http://api.randomuser.me/0.2/portraits/men/2.jpg"
				        },
				        "seed": "89d6b717b0ebc25",
				        "version": "0.2.1"
				    }
				]';



	$users = json_decode($jsonString,TRUE);

	foreach ($users as $key => $value) {
		$user = $value["user"];
		$query = "insert into users(username,pwd,email) values ('".$user["email"]."' , '".(substr($user["name"]["first"], 0,2).$user["name"]["last"])."' , '".(substr($user["name"]["first"], 0,2).$user["name"]["last"])."');";
		
		$res = mysql_query($query) or die(mysql_error());

		echo $query.'<br>';
		
	}



?>