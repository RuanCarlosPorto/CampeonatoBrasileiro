var apiBaseUrl = 'http://localhost:8000/api';

$(document).ready(function() {
    init();

    $("#confrontationButton").on('click', function () {
        $('#confrontationModal').modal('show');
    });

    $("#btnSaveConfrontation").on('click', function () {
        if ($('#selectHomeTeam').val() === $('#selectOutHomeTeam').val()) {
            $('#differentTeamsError').removeClass('d-none');
            return;
        }

        const data = {
            score_team_one: $('#scoreOne').val(),
            score_team_two: $('#scoreTwo').val(),
            team_one_id: $('#selectHomeTeam').val(),
            team_two_id: $('#selectOutHomeTeam').val(),
        };
        
        $('#differentTeamsError').addClass('d-none');

        $.ajax({
            type: 'POST',
            url: `${apiBaseUrl}/matches`,
            data: data
        }).done(function() {
            init();
            $('#confrontationModal').modal('hide');
        });
    });

    $('#scoreOne').on('keypress', isNumber);
    $('#scoreTwo').on('keypress', isNumber);
});

function fillSelect(selectId, data) {
    $(`#${selectId}`).empty();

    data.map(item => {
        const option = document.createElement('option');
        option.value = item.id;
        option.innerHTML = item.name;
        $(`#${selectId}`).append(option);
    })
}

function filterTeams(teams) {
    return teams.map(item => {
        return {
            name: item.team.name,
            id: item.team.id
        }
    })
}

function init() {
    $.ajax({
        type: 'GET',
        url: `${apiBaseUrl}/championship`,
      }).done(function(response) {
        loadTable(response);

        const filteredTeams = filterTeams(response);
        fillSelect('selectHomeTeam', filteredTeams);
        fillSelect('selectOutHomeTeam', filteredTeams);
    });
}

function loadTable(table) {
    $('#championshipTable > tbody').empty();

    table.map((item, index) => {
        const positionClass = getPositionClass(index);
        const image = document.createElement('img');
        image.src = `images/${item.team.image}`;
        const line = document.createElement('tr');
        const firstTd = document.createElement('td');
        const icon = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
        </svg>
        `;
        $(firstTd).append(`<span class="${positionClass}">${icon} ${index+1}° </span>`);
        firstTd.appendChild(image);
        $(firstTd).append(item.team.name);
        $(line).append(firstTd);
        $(line).append(`<td><strong>${item.points}</strong></td>`);
        $(line).append(`<td> ${item.games} </td>`);
        $(line).append(`<td> ${item.victories} </td>`);
        $(line).append(`<td> ${item.draws} </td>`);
        $(line).append(`<td> ${item.loses} </td>`);
        $(line).append(`<td> ${item.goals_pro} </td>`);
        $(line).append(`<td> ${item.goals_against} </td>`);
        $(line).append(`<td> ${item.goals_dif} </td>`);
        $('#championshipTable > tbody').append(line);
    });
}

function getPositionClass(index) {
    if (index === 0) return 'first';
    if (index < 7) return 'libertadores';
    if (index < 16) return 'sul-americana';
    return 'down';
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}