<?php

namespace App\Services\PollingUnit\Tambuwal;
/**
* this class will return polling unit of this class
*/

class Bashire_Maikada
{
	function __construct()
	{
	    $this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
		return [
			"MAIKADA ‐ MAIKADA PRI. SCH.",
			"GUNZU/ZARUMAI ‐ GUNZU PRI. SCH.",
			"GARBA MAGAJI ‐ GARBA NMAGAJI PRI. SCH.",
			"KAURAR ADARAWA/ ‐ K/ADARAWA KANWURI",
			"GONGAR ‐ YAYA/GIDAN MAKERA ‐ GIDAN YAYA PRI. SCH.",
			"GONGAR DIKKO/DULUM ‐ GONGAR DIKKO PRI. SCH.",
			"DANGASU/GAWAKUKE ‐ DANGASU G. HAKIMIPRI.SCHOOL",
			"BASHIRE SHIYAR MAGAJI ‐ KANWURI",
			"BASHIRE SHIYAR GABAS ‐ PRI. SCH.",
			"BASHIRE SHIYAR YAMMA ‐ DANHILI",
			"MASU/DAKAYA ‐ MASU PRI. SCH.",
			"ALASAN KUNGA ‐ ALASAN PRI. SCH.",
			"DAKAYA/CHOFAL ‐ DAKAYA DANFILI",
			"BANGA ‐ BANGA PRI. SCH.",
			"LABE ‐ LABE PRI. SCH.",
			"HULKUI/GYARGE ‐ GYARGE PRI. SCH.",
			"MODIBBO KADA PRI. SCH.",
			"LALLE PRI. SCH.",
			"UNGUWAR DAN BAGUDU PRI. SCH.",
			"YAGAWAL PRI. SCH.",
			"ZABARMA"
		];
	}
}