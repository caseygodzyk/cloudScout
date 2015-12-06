var editor; // use a global for the submit and return data rendering in the examples
$(document).ready(function() {
 
 
                $.ajax({
                                                                                                url: 'http://www.thebluealliance.com/api/v2/event/2016nhgrs/teams?X-TBA-App-Id=frc5240:scouting-system:v0',
                                                                                                type: "GET",
                                                                                                dataType: "json",
                                                                                                complete: function (data_response) {
                                                                                                for(var i = 0; i<data_response.responseJSON.length; i++){
                                                                                                                var row = "";
                                                                                                                row = "<tr>";
                                                                                                                row += "<td>" + data_response.responseJSON[i].team_number +"</td><td>"+ data_response.responseJSON[i].nickname + "</td>";
                                                                                                               
                                                                                                                $.ajax({
                                                                                                                                                url: "http://www.thebluealliance.com/api/v2/team/frc"+ data_response.responseJSON[i].team_number  +"/history/awards?X-TBA-App-Id=frc5240:scouting-system:v0",
                                                                                                                                                type: "GET",
                                                                                                                                                dataType: "json",
                                                                                                                                                async: false,
                                                                                                                                                complete: function (result) {
                                                                                                                                               
                                                                                                                                                for(var c = 0; c< 4; c++){
                                                                                                                                               
                                                                                                                                                                                                                if(!(typeof result.responseJSON[result.responseJSON.length-c-1] === 'undefined')) {
                                                                                                                                                                                                                                                                                row +="<td>" + result.responseJSON[result.responseJSON.length-c-1].event_key + "</td><td>" + result.responseJSON[result.responseJSON.length-c-1].name + "</td>";
                                                                                                                                                                                                                }
                                                                                                                                                                                                                else
                                                                                                                                                                                                                {
                                                                                                                                                                                                                                                                                row +="<td>none</td><td>none</td>";
                                                                                                                                                                                                                }
                                                                                                                                                }
 
                                                                                                                                                                                                               
                                                                                                                                                                                                               
                                                                                                                                                                                                               
                                                                                                                                                }
                                                                                                                                });
                                                                                                                               
                                                                                               
                                                                                                                                                                $( "#tableBody" ).append(row+"</tr>");
                                                                                                }
                                                                                                                                $('#example').DataTable( {
                                                                                                                                 "scrollX": true
                                                                                                                                                });
                                                                                                }
                                                                                               
                                });
                               
 
                               
} );
                /*editor = new $.fn.dataTable.Editor( {
        ajax: {
          
                type: 'GET',
                url:  'http://www.thebluealliance.com/api/v2/event/2016nhgrs/teams?X-TBA-App-Id=frc5240:scouting-system:v0'
           
          
            }
        }
        table: "#example",
        fields: [ {
                label: "number:",
                name: "team_number"
            }, {
                label: "name:",
                name: "nickname"
            }, {
                label: "state:",
                name: "region"
            }, {
                label: "website:",
                name: "website"
            }, {
                label: "city:",
                name: "locality"
            }, {
                label: "country",
                name: "country_name"
            }, {
                label: "rookie_year",
                name: "rookie_year"
            }
        ]
    } );
 
*/