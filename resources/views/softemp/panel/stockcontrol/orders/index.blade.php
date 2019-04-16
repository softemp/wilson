@extends('softemp.panel.layouts.app')

@section('title')
    Ordens
    @parent
@stop

{{-- page level styles --}}
@section('page_styles')
    <link rel="stylesheet" href="{{ asset('softemp/panel/vendors/dataTables/css/dataTable.css') }}">
@stop

@section('content-header')
    <h1>
        Ordens
        <small>Tudo começa aqui</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('panel.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Ordens</li>
    </ol>
@endsection

@section('content')
    {{-- Default box --}}
    <div class="box">

        <div class="box-header with-border">
            @if(!Request::is('painel/estoque/ordens'))
                <h3 class="box-title">Ordens Fechadas</h3>
                <a class="btn btn-success btn-sm" href="{{ route('panel.stockcontrol.order.index') }}">Ordens Abertas</a>
            @endif
            @if(!Request::is('painel/estoque/ordens/fechadas'))
                <h3 class="box-title">Ordens Abertas</h3>
                <a class="btn btn-warning btn-sm" href="{{ route('panel.stockcontrol.order.closed') }}">Ordens Finalizadas</a>
            @endif
            <a class="btn btn-primary btn-sm pull-right" href="{{route('panel.stockcontrol.order.create')}}">Nova Ordem</a>
        </div>
        <div class="box-body">
            <table id="table1" class="display responsive nowrap dataTable no-footer dtr-inline collapsed" style="width: 100%;" role="grid">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Técnico responsável</th>
                    <th>Equipamentos</th>
                    @if(!Request::is('painel/estoque/ordens'))
                        <th>Data de fechamento</th>
                    @endif
                    @if(!Request::is('painel/estoque/ordens/fechadas'))
                        <th>Data de abertura</th>
                    @endif

                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->technicals->name}}</td>
                        <td>{{count($order->equipment)}}</td>
                        <td>
                            @if ($order->status == 2)
                                {{$order->updated_at->format('d/m/Y H:m')}}
                            @else
                                @if ($order->checkExpiration($order->created_at))
                                    {{$order->created_at->format('d/m/Y H:m')}}
                                    <span class="label label-danger">Expirado!</span>
                                @else
                                    {{$order->created_at->format('d/m/Y H:m')}}
                                @endif
                            @endif
                        </td>
                        <td>
                            <a href="{{route('panel.stockcontrol.order.show', $order->id)}}" title="Ver" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                            {{--<a href="{{route('panel.stockcontrol.order.edit', $order->id)}}" title="Alterar" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>--}}
                            {{--<a href="#"--}}
                            {{--onclick="destroy('{{route('panel.stockcontrol.order.destroy', $order->id)}}', '{{$order->id}}')" title="Deletar" class="btn btn-xs btn-danger">--}}
                            {{--<i class="fa fa-remove"></i>--}}
                            {{--</a>--}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{-- /.box-body --}}
        <div class="box-footer">
            Floripa Server || Norte Server || Gbit Telecom
        </div>
        {{-- /.box-footer --}}
    </div>
    {{-- /.box --}}
@endsection

{{-- page level scripts --}}
@section('page_scripts')
    <script src="{{ asset('softemp/panel/vendors/dataTables/js/dataTable.js') }}"></script>
    <!-- page script -->
    <script>
        $(document).ready(function() {
            //$(function () {
            $('#table1').DataTable({
                "language": {
                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "_MENU_ resultados por página",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sSearch": "Pesquisar",
                    "oPaginate": {
                        "sNext": "Próximo",
                        "sPrevious": "Anterior",
                        "sFirst": "Primeiro",
                        "sLast": "Último"
                    },
                    "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                    }
                }
            })
            //});
        });
    </script>
    <script>
        $(function () {
            $("td").dblclick(function () {
                var conteudoOriginal = $(this).text();

                $(this).addClass("celulaEmEdicao");
                $(this).html("<input type='text' value='" + conteudoOriginal + "' />");
                $(this).children().first().focus();

                $(this).children().first().keypress(function (e) {
                    if (e.which == 13) {
                        var novoConteudo = $(this).val();
                        $(this).parent().text(novoConteudo);
                        $(this).parent().removeClass("celulaEmEdicao");
                    }
                });

                $(this).children().first().blur(function(){
                    $(this).parent().text(conteudoOriginal);
                    $(this).parent().removeClass("celulaEmEdicao");
                });
            });
        });
    </script>
@stop
