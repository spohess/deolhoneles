# Projeto De Olho Neles

### Objetivo

Criar um site para pesquisar gastos de deputados. Dados extraídos da [API](https://dadosabertos.camara.leg.br/swagger/api.html)

### Modelo de dados

Para mais detalhes do ER [modelo](https://dbdiagram.io/d/DeOlhoNeles-687bf3a5f413ba3508b0ff81)

### Instalação do projeto

### Crie .env

```bash
cp .env.example .env
```

### Instalando dependências

```bash
docker run --rm -v $(pwd):/var/www/html -w /var/www/html laravelsail/php84-composer:latest composer install --ignore-platform-reqs
```

### Building

```bash
./vendor/bin/sail build --no-cache
```

### Subindo containers

```bash
./vendor/bin/sail up -d
```

### Gerando chave

```bash
./vendor/bin/sail artisan key:generate
```

### URL base

Adicione o valor correto da chave DADOS_ABERTOS_BASEURL no .env

### Executando a fila

```bash
./vendor/bin/sail artisan queue:work
```

### Carregar dados

Acesse o link local http://localhost/ ou o que foi configurado no .env clique no botão "Carregar deputados (RO)". Serão carregados somente os deputados de Rondônia e os gatos apenas de Março/2025. Os dados são carregados somente uma vez, não é processo de update de gastos caso queira executar mais de uma vez limpe o banco de dados usando o comando abaixo e rode novamente clicando no botão

```bash
./vendor/bin/sail artisan migrate:refresh
```
