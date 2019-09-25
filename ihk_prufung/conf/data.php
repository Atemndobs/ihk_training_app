<?php
$res11 = $_POST ["q11"];
$q11 = implode(",", $res11);
$res12 = $_POST ["q12"];
$q12 = implode(",", $res12);
$res13 = $_POST ["q13"];
$q13 = implode(",", $res13);


$res14= array($_POST ["q14a"], $_POST ["q14b"], $_POST ["q14c"], $_POST ["q14d"], $_POST ["q14e"], );
$q14 = implode(",", $res14);


$res15 = $_POST ["q15"];
$q15 = implode(",", $res15);
$res16 = $_POST ["q16"];
$q16 = implode(",", $res16);
$res17 = $_POST ["q17"];
$q17 = implode(",", $res17);
$res18 = $_POST ["q18"];
$q18 = implode(",", $res18);
$res19 = $_POST ["q19"];
$q19 = implode(",", $res19);
$res110 = $_POST ["q110"];
$q110 = implode(",", $res110);
$res111 = $_POST ["q111"];
$q111 = implode(",", $res111);
$res112 = $_POST ["q112"];
$q112 = implode(",", $res112);
$q113 = $_POST ["q113"];
$res114 = $_POST ["q114"];
$q114 = implode(",", $res114);

$res21 = $_POST ["q21"];
$q21 = implode(",", $res21);
$res22 = $_POST ["q22"];
$q22 = implode(",", $res22);
$res23 = $_POST ["q23"];
$q23 = implode(",", $res23);
$res24 = $_POST ["q24"];
$q24 = implode(",", $res24);

$q25a = implode(',',$_POST ["q25a"]);
$q25b = implode(',',$_POST ["q25b"]);
$q25c = implode(',',$_POST ["q25c"]);
$res25 =array($q25a,$q25b,$q25c) ;
$q25 = implode(";", $res25);

$res26 = $_POST ["q26"];
$q26 = implode(",", $res26);
$res27 = $_POST ["q27"];
$q27 = implode(",", $res27);
$res28 = $_POST ["q28"];
$q28 = implode(",", $res28);
$res29 = $_POST ["q29"];
$q29 = implode(",", $res29);
$res210 = $_POST ["q210"];
$q210 = implode(",", $res210);
$res211 = $_POST ["q211"];
$q211 = implode(",", $res211);
$res212 = $_POST ["q212"];
$q212 = implode(",", $res212);

$res213 = $_POST ["q213"];
$q213 =implode(",", $res213);
$res214 = array($_POST ["q214a"], $_POST ["q214b"], $_POST ["q214c"], $_POST ["q214d"], $_POST ["q214e"], );
$q214 = implode(",", $res214);
$res215 = $_POST ["q215"];
$q215 = implode(",", $res215);
$res216 = $_POST ["q216"];
$q216 = implode(",", $res216);


$q217a = implode(',',$_POST ["q217a"]);
$q217b = implode(',',$_POST ["q217b"]);
$q217c = implode(',',$_POST ["q217c"]);
$res217 =array($q217a,$q217b,$q217c) ;
$q217 = implode(";", $res217);


$res218 = $_POST ["q218"];
$q218 = implode(",", $res218);
$res219 = $_POST ["q219"];
$q219 = implode(",", $res219);


$res31 = array($_POST ["q31a"], $_POST ["q31b"], $_POST ["q31c"], $_POST ["q31d"], $_POST ["q31e"], );
$q31 = implode(",", $res31);
$res32 = $_POST ["q32"];
$q32 = implode(",", $res32);
$res33 = $_POST ["q33"];
$q33 = implode(",", $res33);
$res34 = $_POST ["q34"];
$q34 = implode(",", $res34);
$res35 = $_POST ["q35"];
$q35 = implode(",", $res35);
$res36 = $_POST ["q36"];
$q36 = implode(",", $res36);
$res37 = $_POST ["q37"];
$q37 = implode(",", $res37);
$res38 = $_POST ["q38"];
$q38 = implode(",", $res38);
$res39 = $_POST ["q39"];
$q39 = implode(",", $res39);
$res310 = $_POST ["q310"];
$q310 = implode(",", $res310);

$res41 = $_POST ["q41"];
$q41 = implode(",", $res41);

$res42 =  array($_POST ["q42a"], $_POST ["q42b"], $_POST ["q42c"], $_POST ["q42d"], $_POST ["q42e"], );
$q42 = implode(",", $res42);

$res43 = $_POST ["q43"];
$q43 = implode(",", $res43);
$res44 = $_POST ["q44"];
$q44 = implode(",", $res44);
$res45 = $_POST ["q45"];
$q45 = implode(",", $res45);
$res46 = $_POST ["q46"];
$q46 = implode(",", $res46);
$res47 = $_POST ["q47"];
$q47 = implode(",", $res47);


$res48 = array($_POST ["q48a"], $_POST ["q48b"], $_POST ["q48c"], $_POST ["q48d"]);
$q48 = implode(",", $res48);




return [
    'question' => [
        0 =>[

        ],
        
        1 => [

        ],
        
        2 => [
            
        ],
        
        3 => [
            
        ]
           ],
    'answer' => [

    ],
    'response' => [
        
        0 => [
            0 => $q11,
            1 => $q12,
            2 => $q13,
            3 => $q14,
            4 => $q15,
            5 => $q16,
            6 => $q17,
            7 => $q18,
            8 => $q19,
            9 => $q110,
            10 => $q111,
            11 => $q112,
            12 => $q113,
            13 => $q114,
        ],
        
        1 => [
            0 => $q21,
            1 => $q22,
            2 => $q23,
            3 => $q24,
            4 => $q25,
            5 => $q26,
            6 => $q27,
            7 => $q28,
            8 => $q29,
            9 => $q210,
            10 => $q211,
            11 => $q212,
            12 => $q213,
            13 => $q214,
            14 => $q215,
            15 => $q216,
            16 => $q217,
            17 => $q218,
            18 => $q219
        ],

        2 => [
            0 => $q31,
            1 => $q32,
            2 => $q33,
            3 => $q34,
            4 => $q35,
            5 => $q36,
            6 => $q37,
            7 => $q38,
            8 => $q39,
            9 => $q310
        ],

        3 => [
            0 => $q41,
            1 => $q42,
            2 => $q43,
            3 => $q44,
            4 => $q45,
            5 => $q46,
            6 => $q47,
            7 => $q48
        ]
    ],
    'hash_answer' => [

    ]
];
