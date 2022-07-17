@extends('layouts.master')

@section('title-meta')
    <title>Paper Weight Chart| {{ config('app.name') }} </title>
    <meta name="description" content="Can you find a paper chart? This paper weight chart will help you find out how many types of paper weight in terms of its size, grammage, or basis weight.">
    <link rel="canonical" href="{{route('paper-weight')}}" />

@endsection

@section('custom-css')
@endsection

@section('content')
    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 style="color: red">Paper Weight Chart</h1>

            </div>
        </div>
    </div>
    <br>
    <div class="container home-content home-content-psize">
        <h3>PAPER WEIGHT AND PAPER CONVERSION — GRAMS PER SQUARE METER, TO POINTS AND POUNDS</h3>
        <p>Text stock versus cover stock: The coated stock (first chart below) is for text stock, not cover stock. For
            instance, business cards are most often printed on a paper weight of 80 lb cover stock. If they were printed on
            80 lb text stock, they would be very thin business cards! 80 lb text and 80 lb cover paper weight stock are
            different thicknesses. Also see “Converting…” at the bottom of this paper conversion page.</p>

        <div class="row">
            <div class="col-sm-6 col-lg-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr style="background-color: rgb(255, 81, 81)">
                            <th colspan="2" class="text-center">PAPER COATED STOCK — GLOSS OR MATTE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>54 lb text wt</td>
                            <td class="text-end">80 gsm</td>
                        </tr>
                        <tr>
                            <td>61 lb text wt</td>
                            <td class="text-end"d>90 gsm</td>
                        </tr>
                        <tr>
                            <td>68 lb text wt</td>
                            <td class="text-end">100 gsm</td>
                        </tr>
                        <tr>
                            <td>82 lb text wt</td>
                            <td class="text-end">120 gsm</td>
                        </tr>
                        <tr>
                            <td>101 lb text wt</td>
                            <td class="text-end">150 gsm</td>
                        </tr>
                        <tr>
                            <td>122 lb text wt</td>
                            <td class="text-end">180 gsm</td>
                        </tr>
                        <tr>
                            <td>135 lb text wt</td>
                            <td class="text-end">200 gsm</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-lg-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr style="background-color: rgb(255, 81, 81)">
                            <th colspan="2" class="text-center">CARD BOARD STOCK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>8 pt cover wt</td>
                            <td class="text-end">190 gsm</td>
                        </tr>
                        <tr>
                            <td>9 pt cover wt</td>
                            <td class="text-end">210 gsm</td>
                        </tr>
                        <tr>
                            <td>10 pt cover wt</td>
                            <td class="text-end">230 gsm</td>
                        </tr>
                        <tr>
                            <td>12 pt cover wt</td>
                            <td class="text-end">260 gsm</td>
                        </tr>
                        <tr>
                            <td>14 pt cover wt</td>
                            <td class="text-end">310 gsm</td>
                        </tr>
                        <tr>
                            <td>16 pt cover wt</td>
                            <td class="text-end">350 gsm</td>
                        </tr>
                        <tr>
                            <td>18 pt cover wt</td>
                            <td class="text-end">400 gsm</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-sm-6 col-lg-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr style="background-color: rgb(255, 81, 81)">
                            <th colspan="4" class="text-center">HARDCOVER BINDING BOARD</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>60 pt</td>
                            <td class="text-center">16 oz</td>
                            <td class="text-center">1.4 mm</td>
                            <td class="text-end">1000 gsm</td>
                        </tr>
                        <tr>
                            <td>65 pt</td>
                            <td class="text-center">20 oz</td>
                            <td class="text-center">1.8 mm</td>
                            <td class="text-end">1100 gsm</td>
                        </tr>
                        <tr>
                            <td>70 pt</td>
                            <td class="text-center">24 oz</td>
                            <td class="text-center">2.0 mm</td>
                            <td class="text-end">1200 gsm</td>
                        </tr>
                        <tr>
                            <td>80 pt</td>
                            <td class="text-center">28 oz</td>
                            <td class="text-center">2.25 mm</td>
                            <td class="text-end">1400 gsm</td>
                        </tr>
                        <tr>
                            <td>88 pt</td>
                            <td class="text-center">30 oz</td>
                            <td class="text-center">2.5 mm</td>
                            <td class="text-end">1600 gsm</td>
                        </tr>

                        <tr>
                            <td>92 pt</td>
                            <td class="text-center">36 oz</td>
                            <td class="text-center">2.8 mm</td>
                            <td class="text-end">1700 gsm</td>
                        </tr>
                        <tr>
                            <td>98 pt</td>
                            <td class="text-center">40 oz</td>
                            <td class="text-center">3.0 mm</td>
                            <td class="text-end">1800 gsm</td>
                        </tr>
                        <tr>
                            <td>140 pt</td>
                            <td class="text-center">48 oz</td>
                            <td class="text-center">3.4 mm</td>
                            <td class="text-end">2200 gsm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 col-lg-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr style="background-color: rgb(255, 81, 81)">
                            <th colspan="2" class="text-center">PAPER UNCOATED STOCK — WOOD FREE (OFFSET)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>54 lb text wt</td>
                            <td class="text-end">80 gsm</td>
                        </tr>
                        <tr>
                            <td>68 lb text wt</td>
                            <td class="text-end">100 gsm</td>
                        </tr>
                        <tr>
                            <td>81 lb text wt</td>
                            <td class="text-end">120 gsm</td>
                        </tr>
                        <tr>
                            <td>95 lb text wt</td>
                            <td class="text-end">140 gsm</td>
                        </tr>
                        <tr>
                            <td>122 lb text wt</td>
                            <td class="text-end">180 gsm</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection

@section('custom-script')
@endsection
