@extends('layouts.layout')

@section('title')
    Pemasaran - Pelanggan
@endsection

@section('name')
    Pelanggan
@endsection

@section('sidebar')
    <x-sidebar.sidebar>
        <li class="menu-title">Barang Dikirim</li>
            <li>
                <a href="{{ url('barang-dikirim') }}">
                    <x-components.fontawesome icon="menu-icon fa fa-laptop" />
                    Barang Dikirim
                </a>
            </li>
        </li>

        <li class="menu-title">Kurir</li>
            <li>
                <a href="{{ url('kurir') }}">
                    <x-components.fontawesome icon="menu-icon fa fa-laptop" />
                    Kurir
                </a>
            </li>
        </li>

        <li class="menu-title">Pelanggan</li>
            <li class="active">
                <a href="{{ url('pelanggan') }}">
                    <x-components.fontawesome icon="menu-icon fa fa-table" />
                    Pelanggan
                </a>
            </li>
        </li>


    </x-sidebar.sidebar>
@endsection

@section('content')
    <x-cards.card title="Edit Data">
        <x-forms.form action="" method="post">
            <input type="hidden" name='Id' value="{{ $pelanggan->id }}">
            <x-forms.v_input label="Nama" type="text" :value="$pelanggan->nama" />
            <x-forms.v_input label="Alamat" type="text" :value="$pelanggan->alamat"/>
            <x-forms.v_input label="Telepon" type="number" :value="$pelanggan->tlp" />
            <x-components.primary_button>
                Submit
            </x-components.primary_button>
            <x-components.link link="pelanggan">
                <x-components.danger_button>
                    Batal
                </x-components.danger_button>
            </x-components.link>
        </x-forms.form>
    </x-cards.card>
@endsection
