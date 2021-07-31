<p>
    Para o funcionamento da aplicação, é necessário a instalação do Composer, do Laravel e do MySQL na máquina.
</p>
<p>
    Após baixar o projeto é necessário executar o comando <code>composer install</code> para a isntalação das dependências. Assim que as dependências forem instaladas, deve-se fazer a preparação do banco de dados. Existem duas formas de fazer essa preparação:
    <ul>
        <li>Importando o dump do banco presente no projeto: na raíz do projeto existe um arquivo chamado "campeonato.sql", ao importar esse arquivo no banco, o projeto já poderá ser iniciado. </li>
        <li>Utilizando as migrations e as seeders: com um banco vazio, chamado "campeonato", presente no banco de dados, execute os comandos <code> php artisan migrate</code> e <code>php artisan db:seed</code>, assim o projeto já estará pronto para ser iniciado. </li>
    </ul>
</p>
<p>
    Para iniciar o projeto basta executar, no terminal/CMD, o seguinte comando <code>php artisan serve</code>
</p>