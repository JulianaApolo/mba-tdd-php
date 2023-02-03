# TDD com PHP

Atividade da matéria Sofware Quality and Metrics do MBA em Engenharia de Software da Impacta

## Atividade proposta

Como usuário gostaria de uma funcionalidade que valide se uma frase ou palavra é palíndromo.

**Critérios de aceite:**

**Verdadeiro:**
- “Rotator”
- “bob”
- “madam”
- “mAlAyAlam”
- “1”
- “Able was I, ere I saw Elba”
- “Madam I’m Adam”
- “Step on no pets.”
- “Top spot!”
- “02/02/2020”
- “Socorram-me subi ônibus em marrocos”

**Falso:**
- “xyz”
- “elephant”
- “Country”
- “Top . post!”
- “Wonderful-fool”
- “Wild imagination!”

O componente deve receber os exemplos acima e retornar verdadeiro ou falso, conforme a regra. 

Fazer o componente usando a metodologia TDD. 

Atividade em grupo ou individual.

Enviar a URL do Github com todo o código fonte.

Fonte: https://en.wikipedia.org/wiki/Palindrome

## Instalação do ambiente

Suba um container com o php:
```
docker-compose up --build -d
```

Entre no container:
```
docker-compose exec app bash
```

Instale o composer:
```
composer install
```

Rode os testes:
```
./vendor/bin/phpunit tests
```