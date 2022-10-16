@extends('home')
@section('title')
    Absen | Page
@endsection
@section('content')
    <section>
        <div class="card">
            <card-title class="py-4 mx-4 text-uppercase">
                Table Absen
            </card-title>
            <card-body>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Start date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>63</td>
                            <td>2011-07-25</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>66</td>
                            <td>2009-01-12</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>22</td>
                            <td>2012-03-29</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>33</td>
                            <td>2008-11-28</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>61</td>
                            <td>2012-12-02</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>59</td>
                            <td>2012-08-06</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>55</td>
                            <td>2010-10-14</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>39</td>
                            <td>2009-09-15</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>23</td>
                            <td>2008-12-13</td>
                        </tr>
                    </tbody>
                </table>
            </card-body>
        </div>
    </section>
@endsection
