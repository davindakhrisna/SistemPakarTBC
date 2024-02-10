<?php

require_once "fuzzifikasi.php";

require_once "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM output");
$batas = mysqli_fetch_array($data);
$a = $batas['bt_bawah'];
$b = $batas['bt_atas'];

// pembentukan rule/inferensi
// pembentukan nilai z
// pembentukan defuzzifikasi
// positif = (miu*(b-a))+a
// negatif = b-(miu*(b-a))

$rule1 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z1 = ( $rule1*($b - $a) ) + $a;
$defuz1 = $rule1 * $z1;

$rule2 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z2 = ( $rule2*($b - $a) ) + $a;
$defuz2 = $rule2 * $z2;

$rule3 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z3 = ( $rule3*($b - $a) ) + $a;
$defuz3 = $rule3 * $z3;

$rule4 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z4 = ( $rule4*($b - $a) ) + $a;
$defuz4 = $rule4 * $z4;

$rule5 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z5 = ( $rule5*($b - $a) ) + $a;
$defuz5 = $rule5 * $z5;

$rule6 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z6 = ( $rule6*($b - $a) ) + $a;
$defuz6 = $rule6 * $z6;

$rule7 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z7 = ( $rule7*($b - $a) ) + $a;
$defuz7 = $rule7 * $z7;

$rule8 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z8 = ( $rule8*($b - $a) ) + $a;
$defuz8 = $rule8 * $z8;

$rule9 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z9 = ( $rule9*($b - $a) ) + $a;
$defuz9 = $rule9 * $z9;

$rule10 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z10 = ( $rule10*($b - $a) ) + $a;
$defuz10 = $rule10 * $z10;

$rule11 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z11 = ( $rule11*($b - $a) ) + $a;
$defuz11 = $rule11 * $z11;

$rule12 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z12 = ( $rule12*($b - $a) ) + $a;
$defuz12 = $rule12 * $z12;

$rule13 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z13 = ( $rule13*($b - $a) ) + $a;
$defuz13 = $rule13 * $z13;

$rule14 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z14 = ( $rule14*($b - $a) ) + $a;
$defuz14 = $rule14 * $z14;

$rule15 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z15 = ( $rule15*($b - $a) ) + $a;
$defuz15 = $rule15 * $z15;

$rule16 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z16 = ( $rule16*($b - $a) ) + $a;
$defuz16 = $rule16 * $z16;

$rule17 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z17 = ( $rule17*($b - $a) ) + $a;
$defuz17 = $rule17 * $z17;

$rule18 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z18 = ( $rule18*($b - $a) ) + $a;
$defuz18 = $rule18 * $z18;

$rule19 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z19 = ( $rule19*($b - $a) ) + $a;
$defuz19 = $rule19 * $z19;

$rule20 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z20 = ( $rule20*($b - $a) ) + $a;
$defuz20 = $rule20 * $z20;

$rule21 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z21 = ( $rule21*($b - $a) ) + $a;
$defuz21 = $rule21 * $z21;

$rule22 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z22 = ( $rule22*($b - $a) ) + $a;
$defuz22 = $rule22 * $z22;

$rule23 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z23 = ( $rule23*($b - $a) ) + $a;
$defuz23 = $rule23 * $z23;

$rule24 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z24 = ( $rule24*($b - $a) ) + $a;
$defuz24 = $rule24 * $z24;

$rule25 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z25 = ( $rule25*($b - $a) ) + $a;
$defuz25 = $rule25 * $z25;

$rule26 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z26 = ( $rule26*($b - $a) ) + $a;
$defuz26 = $rule26 * $z26;

$rule27 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z27 = ( $rule27*($b - $a) ) + $a;
$defuz27 = $rule27 * $z27;

$rule28 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z28 = ( $rule28*($b - $a) ) + $a;
$defuz28 = $rule28 * $z28;

$rule29 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z29 = ( $rule29*($b - $a) ) + $a;
$defuz29 = $rule29 * $z29;

$rule30 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z30 = ( $rule30*($b - $a) ) + $a;
$defuz30 = $rule30 * $z30;

$rule31 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z31 = ( $rule31*($b - $a) ) + $a;
$defuz31 = $rule31 * $z31;

$rule32 = min($miu_batuk_positif,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z32 = ( $rule32*($b - $a) ) + $a;
$defuz32 = $rule32 * $z32;

$rule33 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z33 = ( $rule33*($b - $a) ) + $a;
$defuz33 = $rule33 * $z33;

$rule34 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z34 = ( $rule34*($b - $a) ) + $a;
$defuz34 = $rule34 * $z34;

$rule35 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z35 = ( $rule35*($b - $a) ) + $a;
$defuz35 = $rule35 * $z35;

$rule36 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z36 = ( $rule36*($b - $a) ) + $a;
$defuz36 = $rule36 * $z36;

$rule37 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z37 = ( $rule37*($b - $a) ) + $a;
$defuz37 = $rule37 * $z37;

$rule38 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z38 = ( $rule38*($b - $a) ) + $a;
$defuz38 = $rule38 * $z38;

$rule39 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z39 = ( $rule39*($b - $a) ) + $a;
$defuz39 = $rule39 * $z39;

$rule40 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z40 = ( $rule40*($b - $a) ) + $a;
$defuz40 = $rule40 * $z40;

$rule41 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z41 = ( $rule41*($b - $a) ) + $a;
$defuz41 = $rule41 * $z41;

$rule42 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z42 = ( $rule42*($b - $a) ) + $a;
$defuz42 = $rule42 * $z42;

$rule43 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z43 = ( $rule43*($b - $a) ) + $a;
$defuz43 = $rule43 * $z43;

$rule44 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z44 = ( $rule44*($b - $a) ) + $a;
$defuz44 = $rule44 * $z44;

$rule45 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z45 = ( $rule45*($b - $a) ) + $a;
$defuz45 = $rule45 * $z45;

$rule46 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z46 = ( $rule46*($b - $a) ) + $a;
$defuz46 = $rule46 * $z46;

$rule47 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z47 = ( $rule47*($b - $a) ) + $a;
$defuz47 = $rule47 * $z47;

$rule48 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z48 = ( $rule48*($b - $a) ) + $a;
$defuz48 = $rule48 * $z48;

$rule49 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z49 = ( $rule49*($b - $a) ) + $a;
$defuz49 = $rule49 * $z49;

$rule50 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z50 = ( $rule50*($b - $a) ) + $a;
$defuz50 = $rule50 * $z50;

$rule51 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z51 = ( $rule51*($b - $a) ) + $a;
$defuz51 = $rule51 * $z51;

$rule52 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z52 = ( $rule52*($b - $a) ) + $a;
$defuz52 = $rule52 * $z52;

$rule53 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z53 = ( $rule53*($b - $a) ) + $a;
$defuz53 = $rule53 * $z53;

$rule54 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z54 = ( $rule54*($b - $a) ) + $a;
$defuz54 = $rule54 * $z54;

$rule55 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z55 = ( $rule55*($b - $a) ) + $a;
$defuz55 = $rule55 * $z55;

$rule56 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z56 = ( $rule56*($b - $a) ) + $a;
$defuz56 = $rule56 * $z56;

$rule57 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z57 = ( $rule57*($b - $a) ) + $a;
$defuz57 = $rule57 * $z57;

$rule58 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z58 = ( $rule58*($b - $a) ) + $a;
$defuz58 = $rule58 * $z58;

$rule59 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z59 = ( $rule59*($b - $a) ) + $a;
$defuz59 = $rule59 * $z59;

$rule60 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z60 = ( $rule60*($b - $a) ) + $a;
$defuz60 = $rule60 * $z60;

$rule61 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z61 = ( $rule61*($b - $a) ) + $a;
$defuz61 = $rule61 * $z61;

$rule62 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z62 = ( $rule62*($b - $a) ) + $a;
$defuz62 = $rule62 * $z62;

$rule63 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z63 = ( $rule63*($b - $a) ) + $a;
$defuz63 = $rule63 * $z63;

$rule64 = min($miu_batuk_positif,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
// negatif
$z64 = $b-($rule64*($b - $a)); 
$defuz64 = $rule64 * $z64;

$rule65 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z65 = ( $rule65*($b - $a) ) + $a;
$defuz65 = $rule65 * $z65;

$rule66 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z66 = ( $rule66*($b - $a) ) + $a;
$defuz66 = $rule66 * $z66;

$rule67 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z67 = ( $rule67*($b - $a) ) + $a;
$defuz67 = $rule67 * $z67;

$rule68 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z68 = ( $rule68*($b - $a) ) + $a;
$defuz68 = $rule68 * $z68;

$rule69 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z69 = ( $rule69*($b - $a) ) + $a;
$defuz69 = $rule69 * $z69;

$rule70 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z70 = ( $rule70*($b - $a) ) + $a;
$defuz70 = $rule70 * $z70;

$rule71 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z71 = ( $rule71*($b - $a) ) + $a;
$defuz71 = $rule71 * $z71;

$rule72 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
// negatif
$z72 = $b-($rule72*($b - $a)); 
$defuz72 = $rule72 * $z72;

$rule73 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z73 = ( $rule73*($b - $a) ) + $a;
$defuz73 = $rule73 * $z73;

$rule74 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z74 = ( $rule74*($b - $a) ) + $a;
$defuz74 = $rule74 * $z74;

$rule75 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z75 = ( $rule75*($b - $a) ) + $a;
$defuz75 = $rule75 * $z75;

$rule76 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z76 = $b-($rule76*($b - $a));
$defuz76 = $rule76 * $z76;

$rule77 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z77 = $b-($rule77*($b - $a));
$defuz77 = $rule77 * $z77;

$rule78 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z78 = $b-($rule78*($b - $a));
$defuz78 = $rule78 * $z78;

$rule79 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z79 = $b-($rule79*($b - $a));
$defuz79 = $rule79 * $z79;

$rule80 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z80 = $b-($rule80*($b - $a));
$defuz80 = $rule80 * $z80;

$rule81 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z81 = ( $rule81*($b - $a) ) + $a;
$defuz81 = $rule81 * $z81;

$rule82 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z82 = ( $rule82*($b - $a) ) + $a;
$defuz82 = $rule82 * $z82;

$rule83 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z83 = ( $rule83*($b - $a) ) + $a;
$defuz83 = $rule83 * $z83;

$rule84 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z84 = $b-($rule84*($b - $a));
$defuz84 = $rule84 * $z84;

$rule85 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z85 = ( $rule85*($b - $a) ) + $a;
$defuz85 = $rule85 * $z85;

$rule86 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z86 = $b-($rule86*($b - $a));
$defuz86 = $rule86 * $z86;

$rule87 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z87 = $b-($rule87*($b - $a));
$defuz87 = $rule87 * $z87;

$rule88 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z88 = $b-($rule88*($b - $a));
$defuz88 = $rule88 * $z88;

$rule89 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z89 = $b-($rule89*($b - $a));
$defuz89 = $rule89 * $z89;

$rule90 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z90 = $b-($rule90*($b - $a));
$defuz90 = $rule90 * $z90;

$rule91 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z91 = $b-($rule91*($b - $a));
$defuz91 = $rule91 * $z91;

$rule92 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z92 = $b-($rule92*($b - $a));
$defuz92 = $rule92 * $z92;

$rule93 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z93 = $b-($rule93*($b - $a));
$defuz93 = $rule93 * $z93;

$rule94 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z94 = $b-($rule94*($b - $a));
$defuz94 = $rule94 * $z94;

$rule95 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z95 = $b-($rule95*($b - $a));
$defuz95 = $rule95 * $z95;

$rule96 = min($miu_batuk_normal,$miu_demam_positif,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z96 = $b-($rule96*($b - $a));
$defuz96 = $rule96 * $z96;

$rule97 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z97 = ( $rule97*($b - $a) ) + $a;
$defuz97 = $rule97 * $z97;

$rule98 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z98 = ( $rule98*($b - $a) ) + $a;
$defuz98 = $rule98 * $z98;

$rule99 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z99 = ( $rule99*($b - $a) ) + $a;
$defuz99 = $rule99 * $z99;

$rule100 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z100 = ( $rule100*($b - $a) ) + $a;
$defuz100 = $rule100 * $z100;

$rule101 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z101 = ( $rule101*($b - $a) ) + $a;
$defuz101 = $rule101 * $z101;

$rule102 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z102 = $b-($rule102*($b - $a));
$defuz102 = $rule102 * $z102;

$rule103 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z103 = $b-($rule103*($b - $a));
$defuz103 = $rule103 * $z103;

$rule104 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z104 = $b-($rule104*($b - $a));
$defuz104 = $rule104 * $z104;

$rule105 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z105 = ( $rule105*($b - $a) ) + $a;
$defuz105 = $rule105 * $z105;

$rule106 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z106 = ( $rule106*($b - $a) ) + $a;
$defuz106 = $rule106 * $z106;

$rule107 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z107 = ( $rule107*($b - $a) ) + $a;
$defuz107 = $rule107 * $z107;

$rule108 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z108 = $b-($rule108*($b - $a));
$defuz108 = $rule108 * $z108;

$rule109 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z109 = $b-($rule109*($b - $a));
$defuz109 = $rule109 * $z109;

$rule110 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z110 = $b-($rule110*($b - $a));
$defuz110 = $rule110 * $z110;

$rule111 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_positif,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z111 = $b-($rule111*($b - $a));
$defuz111 = $rule111 * $z111;

$rule112 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z112 = $b-($rule112*($b - $a));
$defuz112 = $rule112 * $z112;

$rule113 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z113 = $b-($rule113*($b - $a));
$defuz113 = $rule113 * $z113;

$rule114 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z114 = $b-($rule114*($b - $a));
$defuz114 = $rule114 * $z114;

$rule115 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z115 = $b-($rule115*($b - $a));
$defuz115 = $rule115 * $z115;

$rule116 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z116 = $b-($rule116*($b - $a));
$defuz116 = $rule116 * $z116;

$rule117 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z117 = $b-($rule117*($b - $a));
$defuz117 = $rule117 * $z117;

$rule118 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z118 = $b-($rule118*($b - $a));
$defuz118 = $rule118 * $z118;

$rule119 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z119 = $b-($rule119*($b - $a));
$defuz119 = $rule119 * $z119;

$rule120 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_positif,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z120 = $b-($rule120*($b - $a));
$defuz120 = $rule120 * $z120;

$rule121 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z121 = $b-($rule121*($b - $a));
$defuz121 = $rule121 * $z121;

$rule122 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z122 = $b-($rule122*($b - $a));
$defuz122 = $rule122 * $z122;

$rule123 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z123 = $b-($rule123*($b - $a));
$defuz123 = $rule123 * $z123;

$rule124 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_positif,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z124 = $b-($rule124*($b - $a));
$defuz124 = $rule124 * $z124;

$rule125 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_positif);
$z125 = $b-($rule125*($b - $a));
$defuz125 = $rule125 * $z125;

$rule126 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_positif,$miu_berat_badan_normal);
$z126 = $b-($rule126*($b - $a));
$defuz126 = $rule126 * $z126;

$rule127 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_positif);
$z127 = $b-($rule127*($b - $a));
$defuz127 = $rule127 * $z127;

$rule128 = min($miu_batuk_normal,$miu_demam_normal,$miu_keringat_normal,$miu_dada_nyeri_normal,$miu_nafas_normal,$miu_nafsu_makan_normal,$miu_berat_badan_normal);
$z128 = $b-($rule128*($b - $a));
$defuz128 = $rule128 * $z128;

// penjumlahan rule
$totalRule = $rule1+$rule2+$rule3+$rule4+$rule5+$rule6+$rule7+$rule8+$rule9+$rule10+$rule11+$rule12+$rule13+$rule14+$rule15+$rule16+$rule17+$rule18+$rule19+$rule20+$rule21+$rule22+$rule23+$rule24+$rule25+$rule26+$rule27+$rule28+$rule29+$rule30+$rule31+$rule32+$rule33+$rule34+$rule35+$rule36+$rule37+$rule38+$rule39+$rule40+$rule41+$rule42+$rule43+$rule44+$rule45+$rule46+$rule47+$rule48+$rule49+$rule50+$rule51+$rule52+$rule53+$rule54+$rule55+$rule56+$rule57+$rule58+$rule59+$rule60+$rule61+$rule62+$rule63+$rule64+$rule65+$rule66+$rule67+$rule68+$rule69+$rule70+$rule71+$rule72+$rule73+$rule74+$rule75+$rule76+$rule77+$rule78+$rule79+$rule80+$rule81+$rule82+$rule83+$rule84+$rule85+$rule86+$rule87+$rule88+$rule89+$rule90+$rule91+$rule92+$rule93+$rule94+$rule95+$rule96+$rule97+$rule98+$rule99+$rule100+$rule101+$rule102+$rule103+$rule104+$rule105+$rule106+$rule107+$rule108+$rule109+$rule110+$rule111+$rule112+$rule113+$rule114+$rule115+$rule116+$rule117+$rule118+$rule119+$rule120+$rule121+$rule122+$rule123+$rule124+$rule125+$rule126+$rule127+$rule128;

// penjumlahan defuzzifikasi
$totalDefuzz = $defuz1+$defuz2+$defuz3+$defuz4+$defuz5+$defuz6+$defuz7+$defuz8+$defuz9+$defuz10+$defuz11+$defuz12+$defuz13+$defuz14+$defuz15+$defuz16+$defuz17+$defuz18+$defuz19+$defuz20+$defuz21+$defuz22+$defuz23+$defuz24+$defuz25+$defuz26+$defuz27+$defuz28+$defuz29+$defuz30+$defuz31+$defuz32+$defuz33+$defuz34+$defuz35+$defuz36+$defuz37+$defuz38+$defuz39+$defuz40+$defuz41+$defuz42+$defuz43+$defuz44+$defuz45+$defuz46+$defuz47+$defuz48+$defuz49+$defuz50+$defuz51+$defuz52+$defuz53+$defuz54+$defuz55+$defuz56+$defuz57+$defuz58+$defuz59+$defuz60+$defuz61+$defuz62+$defuz63+$defuz64+$defuz65+$defuz66+$defuz67+$defuz68+$defuz69+$defuz70+$defuz71+$defuz72+$defuz73+$defuz74+$defuz75+$defuz76+$defuz77+$defuz78+$defuz79+$defuz80+$defuz81+$defuz82+$defuz83+$defuz84+$defuz85+$defuz86+$defuz87+$defuz88+$defuz89+$defuz90+$defuz91+$defuz92+$defuz93+$defuz94+$defuz95+$defuz96+$defuz97+$defuz98+$defuz99+$defuz100+$defuz101+$defuz102+$defuz103+$defuz104+$defuz105+$defuz106+$defuz107+$defuz108+$defuz109+$defuz110+$defuz111+$defuz112+$defuz113+$defuz114+$defuz115+$defuz116+$defuz117+$defuz118+$defuz119+$defuz120+$defuz121+$defuz122+$defuz123+$defuz124+$defuz125+$defuz126+$defuz127+$defuz128;

// output
$output = $totalDefuzz/$totalRule;

// mean
$mean = ($a+$b)/2;