<div class="row">
    <div class="col-lg-8 offset-lg-2 col-md-12 mb-3">
        <div class="card border-dark">
            <table class="table table-sm text-center">
                 <thead class="thead-light">
                    <tr>
                        <th>Количество студентов</th>
                        <th>«5»</th>
                        <th>%</th>
                        <th>«4»</th>
                        <th>%</th>
                        <th>«3»</th>
                        <th>%</th>
                        <th>«2»</th>
                        <th>%</th>
                        <th>КПУ</th>
                        <th>ПУ</th>
                        <th>С/А</th>
                    </tr>
                </thead>
                <tr>
                    <td>{{$result['number']}}</td>

                    @foreach ($result['mark'] as $mark => $percent)
                    <td>{{$mark}}</td>
                    <td>{{$percent}}</td>
                    @endforeach

                    <td>{{$result['cpu']}}</td>
                    <td>{{$result['pu']}}</td>
                    <td>{{$result['ca']}}</td>
                </tr>
            </table>
        </div>

    </div>
</div>
