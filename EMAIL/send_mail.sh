#!/bin/bash
ASSUNTO="$1"
CONTEUDO="$2"
DESTINATARIOS="$3"
while read LINHA
do
	NOME=$(echo "$LINHA" | cut -d';' -f1)
	EMAIL=$(echo "$LINHA" | cut -d';' -f2)
	sed "s/_NOME_/$NOME/g" "$CONTEUDO" | mutt -s "$ASSUNTO" "$EMAIL"
done < "$DESTINATARIOS"
