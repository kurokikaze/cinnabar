﻿<?php

function uniord($u) {
    $c = unpack("N", mb_convert_encoding($u, 'UCS-4BE', 'UTF-8'));
    return $c[1];
}

$text = <<<DORFFORT
FPS: 99D*██████████████████████  Dwarf Fortress  █████████████████ Idlers: 8 ███
█≈~..≈~≈~.``~≈.∞≈≈≈~,~`~'~≈.,≈.~~≈,~≈~.≈`~'≈≈≈~≈≈≈~,,≈~~≈≈,≈≈≈≈..~~"≈~.~`≈≈~≈≈~█
█≈≈~'~,~~~,≈≈≈~~,~≈≈≈~~'≈``~≈,,τ'~~≈`.~≈≈'.,~~',~~~~≈.∞τ~,,.,~~'≈≈≈',~~≈~≈~~~≈~0
█≈≈≈~,'≈≈~≈≈`╞~.,~',~.'`~≈'~'≈'`≈.∞~`≈~≈¶∞≈~≈τ≈,'≈,~"≈`≈≈≈~τ,~'`.≈≈~~.≈≈.≈~.~≈,█
█~~~≈."≈`'≈,≈.∞~~"~~τ≈≈~~~≈~.≈~≈≈≈~.~~~≈≈~~≈~~'≈≈,,≈≈.≈.≈`'~~`"''≈≈.~~~≈,.~∙'≈~█
█~≈~≈≈≈~~,~....≈~~~≈,~.~~O═══════════════════╗.'`,~~≈≈,≈'~~`~`≈~≈≈≈≈..~~'`≈≈≈~~█
█~≈,~≈≈~≈≈╞≈~"~..≈~≈≈~≈.≈≈≈∞≈~≈~≈≈~.~,≈≈~~τ,≈║`,'≈≈≈~~~≈"~≈≈~≈~≈~~≈¶≈~~,~,"`~.,█
█~,~,≈~τ≈``~≈,'≈≈≈≈~.~"`'`≈.~.≈≈~,.≈~~~"≈≈~~~║≈≈~~.."≈'≈~~'τ~.'."'~≈~≈╞≈≈.~,≈≈.█
█,τ.≈~≈~.~~,~.∞~..~"≈~~',~"~`~≈≈,≈.~•••••••≈~║.≈'~~'≈~≈.≈≈≈~`≈≈≈,`≈~`.`'≈~,`'≈'█
█,~~`τ≈~≈≈,~≈∞≈≈,,~≈≈~≈.≈≈~≈.,≈~≈≈~.•••••••`~║≈≈~~'~~~~`~τ≈≈~,'≈~~,τ≈~'~≈`.≈~≈~█
█`~~≈≈.≈≈~.~~~'O███O~~≈τ~'≈'≈.~~τ~~~•••••••~≈║',~≈"~∞≈≈≈..≈~≈≈"≈~≈≈~≈~`≈~"`,~"≈█
█"'≈~`~..~~"'≈~█████≈▓▓▓≈≈≈.≈,≈`¢.≈~•••••••≈~║≈"~~.`≈≈"~~~≈≈~~~≈..~≈≈.≈∞~~~`~≈~█
█≈≈≈≈≈≈~∞≈≈''~.██O██≈▓σ▓≈~.~¶`≈~≈≈~~',~≈,~~~≈║~~~≈,~≈≈~~≈≈≈≈`≈~≈τ≈≈~≈,~'≈~≈≈~~~█
█'∞≈`~',~".≈`≈`█████`▓/▓~`~≈,~≈~≈"≈≈=====~.'"║~≈.~~"`~≈≈≈"`~τ''`',~≈~'~τ,~'"``~█
█`≈~,,''≈≈≈~≈"~O███O~'≈~~≈~≈~≈≈≈`~~.====="~~"║~≈~~≈`∞`~≈τ≈,~≈~~≈≈,~≈"~'`~~≈'≈~~█
█≈~≈≈,≈~≈≈~~≈,~~..~'"~~,≈~~'~τ~≈,≈~,≈.≈,~`≈'.║≈≈`~≈~.≈,'≈≈~.≈.~≈'≈`≈≈,≈'~~~~∞~≈█
█≈~'~`'~≈≈≈~.~≈`≈,`≈≈O═══════════════════════╝"≈`~~~≈.≈`≈~`~"≈,≈τ≈~≈≈~'~'≈≈"~~≈█
█~≈~.,¶,≈',~`≈.~≈~~~≈~','~≈≈'≈≈≈~.≈'≈`≈~~~≈~~≈`'.~~~≈≈≈~,',≈`≈'~,≈,~≈"~~τ~'≈≈~.█
█~~≈~≈≈~≈~.~~τ`+≈~`¶'≈`~~,"~~≈≈.~~~~≈~~~,.~~`'~~`~"≈~~'~~.~≈~`"~~≈,~~~~,~≈≈,~≈~1
█.≈~≈~~~`','~~≈~`≈≈≈≈≈~~≈≈≈~~≈∞≈`.,≈╞~≈'╞≈~'~≈."≈≈~~≈.≈`~τ≈.,'~≈~≈~≈`~~~~≈.~≈"~2
█≈~≈≈▒.,`,`≈~~≈~~≈~~',.,~∞~~~≈≈≈≈~≈`'~∞≈'~``'≈~.,≈≈≈≈~.`≈∞~.~≈~≈".≈"`~≈."≈~≈`≈~8
████████████████████████████████████████████████████████████████████████████████
DORFFORT;

$text_rows = explode("\n", $text);
echo 'rows: ' . count($text_rows);
if ($rows > 30) {
    die('Error slicing rows.');
}

echo '&#' . uniord("O") . ';';
/*foreach ($text_rows as $row) {
	// echo "<!-- $row -->";
	for ($i = 0; $i < 80; $i++) {
		echo '<span class="back_BLACK fore_LRED">&#' . uniord(mb_substr($row, $i, 1, 'UTF8')) . ';</span>';
	}
	echo '<br/>' . "\n";
}*/
?>