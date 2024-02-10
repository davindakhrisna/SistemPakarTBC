<?php

    if ($batuk<=7) {
        $miu_batuk_normal = 1;
        $miu_batuk_positif = 0;
    } elseif ($batuk >= 30) {
        $miu_batuk_normal = 0;
        $miu_batuk_positif = 1;
    } elseif ($batuk >7 && $batuk <30) {
        $miu_batuk_normal = (30-$batuk)/(30-7);
        $miu_batuk_positif = ($batuk-7)/(30-7);
    }

    if ($demam<=7) {
        $miu_demam_normal = 1;
        $miu_demam_positif = 0;
    } elseif ($demam >= 30) {
        $miu_demam_normal = 0;
        $miu_demam_positif = 1;
    } elseif ($demam >7 && $demam <30) {
        $miu_demam_normal = (30-$demam)/(30-7);
        $miu_demam_positif = ($demam-7)/(30-7);
    }

    if ($keringat<=7) {
        $miu_keringat_normal = 1;
        $miu_keringat_positif = 0;
    } elseif ($keringat >= 30) {
        $miu_keringat_normal = 0;
        $miu_keringat_positif = 1;
    } elseif ($keringat >7 && $keringat <30) {
        $miu_keringat_normal = (30-$keringat)/(30-7);
        $miu_keringat_positif = ($keringat-7)/(30-7);
    }
    
    if ($dada_nyeri<=1) {
        $miu_dada_nyeri_normal = 1;
        $miu_dada_nyeri_positif = 0;
    } elseif ($dada_nyeri >= 10) {
        $miu_dada_nyeri_normal = 0;
        $miu_dada_nyeri_positif = 1;
    } elseif ($dada_nyeri >1 && $dada_nyeri <10) {
        $miu_dada_nyeri_normal = (10-$dada_nyeri)/(10-1);
        $miu_dada_nyeri_positif = ($dada_nyeri-1)/(10-1);
    }
    
    if ($nafas<=1) {
        $miu_nafas_normal = 1;
        $miu_nafas_positif = 0;
    } elseif ($nafas >= 10) {
        $miu_nafas_normal = 0;
        $miu_nafas_positif = 1;
    } elseif ($nafas >1 && $nafas <10) {
        $miu_nafas_normal = (10-$nafas)/(10-1);
        $miu_nafas_positif = ($nafas-1)/(10-1);
    }

    if ($nafsu_makan<=7) {
        $miu_nafsu_makan_normal = 1;
        $miu_nafsu_makan_positif = 0;
    } elseif ($nafsu_makan >= 30) {
        $miu_nafsu_makan_normal = 0;
        $miu_nafsu_makan_positif = 1;
    } elseif ($nafsu_makan >7 && $nafsu_makan <30) {
        $miu_nafsu_makan_normal = (30-$nafsu_makan)/(30-7);
        $miu_nafsu_makan_positif = ($nafsu_makan-7)/(30-7);
    }

    if ($berat_badan<=1) {
        $miu_berat_badan_normal = 1;
        $miu_berat_badan_positif = 0;
    } elseif ($berat_badan >= 10) {
        $miu_berat_badan_normal = 0;
        $miu_berat_badan_positif = 1;
    } elseif ($berat_badan >1 && $berat_badan <10) {
        $miu_berat_badan_normal = (10-$berat_badan)/(10-1);
        $miu_berat_badan_positif = ($berat_badan-1)/(10-1);
    }