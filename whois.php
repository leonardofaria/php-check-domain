<html>
<head>
	<title>whois</title>
</head>
<body>
	<form method="post">
		<label for="domain">Domain:</label>
		<input type="text" id="domain" name="domain" />
		<input type="submit"/>
	</form>

	<?php
		function get_server($domain){
			$whoisservers = array(
			array("ac","whois.nic.ac"),
			array("ac.cn","whois.cnnic.net.cn"),
			array("ac.jp","whois.nic.ad.jp"),
			array("ac.uk","whois.ja.net"),
			array("ad.jp","whois.nic.ad.jp"),
			array("adm.br","whois.nic.br"),
			array("adv.br","whois.nic.br"),
			array("aero","whois.information.aero"),
			array("ag","whois.nic.ag"),
			array("agr.br","whois.nic.br"),
			array("ah.cn","whois.cnnic.net.cn"),
			array("al","whois.ripe.net"),
			array("am.br","whois.nic.br"),
			array("arq.br","whois.nic.br"),
			array("at","whois.nic.at"),
			array("au","whois.aunic.net"),
			array("art.br","whois.nic.br"),
			array("as","whois.nic.as"),
			array("asn.au","whois.aunic.net"),
			array("ato.br","whois.nic.br"),
			array("be","whois.geektools.com"),
			array("bg","whois.digsys.bg"),
			array("bio.br","whois.nic.br"),
			array("biz","whois.biz"),
			array("bj.cn","whois.cnnic.net.cn"),
			array("bmd.br","whois.nic.br"),
			array("br","whois.registro.br"),
			array("ca","whois.cira.ca"),
			array("cc","whois.nic.cc"),
			array("cd","whois.cd"),
			array("ch","whois.nic.ch"),
			array("cim.br","whois.nic.br"),
			array("ck","whois.ck-nic.org.ck"),
			array("cl","whois.nic.cl"),
			array("cn","whois.cnnic.net.cn"),
			array("cng.br","whois.nic.br"),
			array("cnt.br","whois.nic.br"),
			array("com","whois.internic.net"),
			array("com.au","whois.aunic.net"),
			array("com.br","whois.nic.br"),
			array("com.cn","whois.cnnic.net.cn"),
			array("com.eg","whois.ripe.net"),
			array("com.hk","whois.hknic.net.hk"),
			array("com.mx","whois.nic.mx"),
			array("com.ru","whois.ripn.ru"),
			array("com.tw","whois.twnic.net"),
			array("conf.au","whois.aunic.net"),
			array("co.jp","whois.nic.ad.jp"),
			array("co.uk","whois.nic.uk"),
			array("cq.cn","whois.cnnic.net.cn"),
			array("csiro.au","whois.aunic.net"),
			array("cx","whois.nic.cx"),
			array("cz","whois.nic.cz"),
			array("de","whois.denic.de"),
			array("dk","whois.dk-hostmaster.dk"),
			array("ecn.br","whois.nic.br"),
			array("ee","whois.eenet.ee"),
			array("edu","whois.internic.net"),
			array("edu.au","whois.aunic.net"),
			array("edu.br","whois.nic.br"),
			array("eg","whois.ripe.net"),
			array("es","whois.ripe.net"),
			array("esp.br","whois.nic.br"),
			array("etc.br","whois.nic.br"),
			array("eti.br","whois.nic.br"),
			array("eun.eg","whois.ripe.net"),
			array("emu.id.au","whois.aunic.net"),
			array("eng.br","whois.nic.br"),
			array("far.br","whois.nic.br"),
			array("fi","whois.ripe.net"),
			array("fj","whois.usp.ac.fj"),
			array("fj.cn","whois.cnnic.net.cn"),
			array("fm.br","whois.nic.br"),
			array("fnd.br","whois.nic.br"),
			array("fo","whois.ripe.net"),
			array("fot.br","whois.nic.br"),
			array("fst.br","whois.nic.br"),
			array("fr","whois.nic.fr"),
			array("g12.br","whois.nic.br"),
			array("gd.cn","whois.cnnic.net.cn"),
			array("ge","whois.ripe.net"),
			array("ggf.br","whois.nic.br"),
			array("gl","whois.ripe.net"),
			array("gr","whois.ripe.net"),
			array("gr.jp","whois.nic.ad.jp"),
			array("gs","whois.adamsnames.tc"),
			array("gov","whois.nic.gov"),
			array("gs.cn","whois.cnnic.net.cn"),
			array("gov.au","whois.aunic.net"),
			array("gov.br","whois.nic.br"),
			array("gov.cn","whois.cnnic.net.cn"),
			array("gov.hk","whois.hknic.net.hk"),
			array("gob.mx","whois.nic.mx"),
			array("gs","whois.adamsnames.tc"),
			array("gz.cn","whois.cnnic.net.cn"),
			array("gx.cn","whois.cnnic.net.cn"),
			array("he.cn","whois.cnnic.net.cn"),
			array("ha.cn","whois.cnnic.net.cn"),
			array("hb.cn","whois.cnnic.net.cn"),
			array("hi.cn","whois.cnnic.net.cn"),
			array("hl.cn","whois.cnnic.net.cn"),
			array("hn.cn","whois.cnnic.net.cn"),
			array("hm","whois.registry.hm"),
			array("hk","whois.hknic.net.hk"),
			array("hk.cn","whois.cnnic.net.cn"),
			array("hu","whois.ripe.net"),
			array("id.au","whois.aunic.net"),
			array("ie","whois.domainregistry.ie"),
			array("ind.br","whois.nic.br"),
			array("imb.br","whois.nic.br"),
			array("inf.br","whois.nic.br"),
			array("info","whois.afilias.info"),
			array("info.au","whois.aunic.net"),
			array("it","whois.nic.it"),
			array("idv.tw","whois.twnic.net"),
			array("int","whois.iana.org"),
			array("is","whois.isnic.is"),
			array("il","whois.isoc.org.il"),
			array("jl.cn","whois.cnnic.net.cn"),
			array("jor.br","whois.nic.br"),
			array("jp","whois.nic.ad.jp"),
			array("js.cn","whois.cnnic.net.cn"),
			array("jx.cn","whois.cnnic.net.cn"),
			array("kr","whois.krnic.net"),
			array("la","whois.nic.la"),
			array("lel.br","whois.nic.br"),
			array("li","whois.nic.ch"),
			array("lk","whois.nic.lk"),
			array("ln.cn","whois.cnnic.net.cn"),
			array("lt","ns.litnet.lt"),
			array("lu","whois.dns.lu"),
			array("lv","whois.ripe.net"),
			array("ltd.uk","whois.nic.uk"),
			array("mat.br","whois.nic.br"),
			array("mc","whois.ripe.net"),
			array("med.br","whois.nic.br"),
			array("mil","whois.nic.mil"),
			array("mil.br","whois.nic.br"),
			array("mn","whois.nic.mn"),
			array("mo.cn","whois.cnnic.net.cn"),
			array("ms","whois.adamsnames.tc"),
			array("mus.br","whois.nic.br"),
			array("mx","whois.nic.mx"),
			array("name","whois.nic.name"),
			array("ne.jp","whois.nic.ad.jp"),
			array("net","whois.internic.net"),
			array("net.au","whois.aunic.net"),
			array("net.br","whois.nic.br"),
			array("net.cn","whois.cnnic.net.cn"),
			array("net.eg","whois.ripe.net"),
			array("net.hk","whois.hknic.net.hk"),
			array("net.lu","whois.dns.lu"),
			array("net.mx","whois.nic.mx"),
			array("net.uk","whois.nic.uk"),
			array("net.ru","whois.ripn.ru"),
			array("net.tw","whois.twnic.net"),
			array("nl","whois.domain-registry.nl"),
			array("nm.cn","whois.cnnic.net.cn"),
			array("no","whois.norid.no"),
			array("nom.br","whois.nic.br"),
			array("not.br","whois.nic.br"),
			array("ntr.br","whois.nic.br"),
			array("nx.cn","whois.cnnic.net.cn"),
			array("nz","whois.domainz.net.nz"),
			array("plc.uk","whois.nic.uk"),
			array("odo.br","whois.nic.br"),
			array("oop.br","whois.nic.br"),
			array("or.jp","whois.nic.ad.jp"),
			array("org","whois.internic.net"),
			array("org.au","whois.aunic.net"),
			array("org.br","whois.nic.br"),
			array("org.cn","whois.cnnic.net.cn"),
			array("org.hk","whois.hknic.net.hk"),
			array("org.lu","whois.dns.lu"),
			array("org.ru","whois.ripn.ru"),
			array("org.tw","whois.twnic.net"),
			array("org.uk","whois.nic.uk"),
			array("pl","nazgul.nask.waw.pl"),
			array("pp.ru","whois.ripn.ru"),
			array("ppg.br","whois.nic.br"),
			array("pro.br","whois.nic.br"),
			array("psi.br","whois.nic.br"),
			array("psc.br","whois.nic.br"),
			array("pt","whois.ripe.net"),
			array("qh.cn","whois.cnnic.net.cn"),
			array("qsl.br","whois.nic.br"),
			array("rec.br","whois.nic.br"),
			array("ro","whois.rotld.ro"),
			array("ru","whois.ripn.ru"),
			array("sc.cn","whois.cnnic.net.cn"),
			array("sd.cn","whois.cnnic.net.cn"),
			array("se","whois.nic-se.se"),
			array("sg","whois.nic.net.sg"),
			array("sh","whois.nic.sh"),
			array("sh.cn","whois.cnnic.net.cn"),
			array("si","whois.arnes.si"),
			array("sk","whois.ripe.net"),
			array("slg.br","whois.nic.br"),
			array("sm","whois.ripe.net"),
			array("sn.cn","whois.cnnic.net.cn"),
			array("srv.br","whois.nic.br"),
			array("st","whois.nic.st"),
			array("sx.cn","whois.cnnic.net.cn"),
			array("tc","whois.adamsnames.tc"),
			array("th","whois.nic.uk"),
			array("tj.cn","whois.cnnic.net.cn"),
			array("tmp.br","whois.nic.br"),
			array("to","whois.tonic.to"),
			array("tr","whois.ripe.net"),
			array("trd.br","whois.nic.br"),
			array("tur.br","whois.nic.br"),
			array("tv","whois.tv"),
			array("tv.br","whois.nic.br"),
			array("tw","whois.twnic.net"),
			array("tw.cn","whois.cnnic.net.cn"),
			array("uk","whois.thnic.net"),
			array("va","whois.ripe.net"),
			array("vet.br","whois.nic.br"),
			array("vg","whois.adamsnames.tc"),
			array("wattle.id.au","whois.aunic.net"),
			array("ws","whois.worldsite.ws"),
			array("xj.cn","whois.cnnic.net.cn"),
			array("xz.cn","whois.cnnic.net.cn"),
			array("yn.cn","whois.cnnic.net.cn"),
			array("zlg.br","whois.nic.br"),
			array("zj.cn","whois.cnnic.net.cn"),
			array("nu","whois.nic.nu"));

			for ($x=0;$x<count($whoisservers);$x++){
				$artld = $whoisservers[$x][0];
				$tldlen = intval(0 - strlen($artld));
				if (substr($domain, $tldlen) == $artld) { $whosrv = $whoisservers[$x][1]; }
			}
			return $whosrv;
		}
		
		function get_content($dom){
			$lusrv = get_server($dom);
			if (!$lusrv) return "";

			$fp = fsockopen($lusrv,43);
			fputs($fp, "$dom\r\n");
			$string="";
			while(!feof($fp)){
				$string.= fgets($fp,128);
			}
			fclose($fp);
			return $string;
		}
		
		function show_whois($dom){
			$string = get_content($dom);

			$reg = "/Whois Server: (.*?)\n/i";
			preg_match_all($reg, $string, $matches);
			$secondtry = $matches[1][0];

			if ($secondtry){
				$fp = fsockopen($secondtry,43);
				fputs($fp, "$dom\r\n");
				$string="";
				while(!feof($fp)){
					$string.=fgets($fp,128);
				}
				fclose($fp);
			}
			return $string;
		}
		
		function check_availability($dom){
			$string = get_content($dom);

			if (strpos($string, "No match for") > 0) {
				return true;
			} else {
				return false;
			}
		}
	
		if (isset($_POST['domain'])){ 
			if (check_availability($_POST['domain']) == true) { 
				echo $_POST['domain'] . " avaliable!";
			} else {
				echo $_POST['domain'] . " not avaliable!";
			}
			echo "<pre>".show_whois($_POST['domain'])."</pre>"; 
		}
	?>
</body>
</html>