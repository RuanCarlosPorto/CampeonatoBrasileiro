<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Campeonato Brasileiro</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body> 
        <div class="centralized mt-2">
            <h1 class="title">
                Tabela
            </h1>
            <div class="d-flex flex-row-reverse m-2">
                <button 
                    id="confrontationButton"
                    type="button" 
                    class="btn btn-success"
                    data-bs-toggle="modal" 
                    data-bs-target="#confrontationModal"
                >
                    Inserir Confronto
                </button>
            </div>

            <table class="table" id="championshipTable">
                <thead>
                    <tr>
                    <th scope="col">Posição</th>
                    <th scope="col">Pts</th>
                    <th scope="col">J</th>
                    <th scope="col">V</th>
                    <th scope="col">E</th>
                    <th scope="col">D</th>
                    <th scope="col">GP</th>
                    <th scope="col">GC</th>
                    <th scope="col">SG</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

        <div class="modal fade" tabindex="-1" id="confrontationModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confronto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-danger d-flex justify-content-center d-none" id="differentTeamsError">
                        É necessário escolher dois times distintos.
                    </div>
                    <div class="d-flex justify-content-around">
                        <div class="p-2">
                            <div class="px-2">
                                <span>
                                    Time da Casa
                                </span>
                            </div>
                            <div class="d-flex">
                                <div class="w-75 px-2">
                                    <select class="form-select" id="selectHomeTeam">
                                    </select>
                                </div>
                                <div class="w-25">
                                    <input type="number" class="form-control" value="0"  id="scoreOne" min="0">
                                </div>
                            </div>
                        </div>
                        <div class="h-100">
                            <span class="bottom-aligned">x</span>
                        </div>
                        <div class="p-2">
                            <div class="px-2">
                                <span>
                                    Visitante
                                </span>
                            </div>
                            <div class="d-flex px-2">
                                <div class="w-25">
                                    <input type="number" class="form-control" value="0" id="scoreTwo" min="0">
                                </div>
                                <div class="w-75 px-2">
                                    <select class="form-select"  id="selectOutHomeTeam">
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="btnSaveConfrontation">Salvar mudanças</button>
                </div>
                </div>
            </div>
        </div>
        
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/main.js" type="text/javascript"></script>
</html>
