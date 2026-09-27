<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>Nouvelle commande #{{ $order->id }}</title>

<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #f4f6f8;
        font-family: Arial, Helvetica, sans-serif;
        color: #1f2937;
    }

    table {
        border-spacing: 0;
        border-collapse: collapse;
    }

    img {
        border: 0;
        display: block;
        max-width: 100%;
    }

    .container {
        width: 100%;
        max-width: 680px;
        margin: 0 auto;
    }

    .card {
        background-color: #ffffff;
        border-radius: 12px;
        overflow: hidden;
    }

    .mobile-padding {
        padding: 35px;
    }

    @media only screen and (max-width: 600px) {
        .mobile-padding {
            padding: 22px !important;
        }

        .container {
            width: 100% !important;
        }

        .card {
            border-radius: 0 !important;
        }

        .product-table {
            font-size: 13px !important;
        }

        .product-table td,
        .product-table th {
            padding: 9px 6px !important;
        }

        .button {
            width: 100% !important;
        }
    }
</style>
```

</head>

<body>

<table width="100%" role="presentation" cellpadding="0" cellspacing="0">
    <tr>
        <td style="padding: 30px 15px;">

```
        <table class="container" width="680" role="presentation" cellpadding="0" cellspacing="0">
            <tr>
                <td>

                    <table class="card" width="100%" role="presentation" cellpadding="0" cellspacing="0">

                        {{-- HEADER --}}
                        <tr>
                            <td style="background-color: #ffffff; padding: 28px 35px; border-bottom: 1px solid #eeeeee;">

                                <table width="100%" role="presentation">
                                    <tr>
                                        <td align="left">

                                            {{-- Remplace cette URL par l'URL publique de ton logo --}}
                                            <img
                                                src="{{ asset('images/logo.png') }}"
                                                alt="Logo"
                                                width="150"
                                                style="width:150px; height:auto;"
                                            >

                                        </td>

                                        <td align="right">
                                            <span style="
                                                display:inline-block;
                                                background-color:#fff4e8;
                                                color:#e87511;
                                                padding:7px 12px;
                                                border-radius:20px;
                                                font-size:12px;
                                                font-weight:bold;
                                            ">
                                                NOUVELLE COMMANDE
                                            </span>
                                        </td>
                                    </tr>
                                </table>

                            </td>
                        </tr>


                        {{-- HERO --}}
                        <tr>
                            <td class="mobile-padding" style="padding: 35px;">

                                <p style="
                                    margin:0 0 10px 0;
                                    color:#e87511;
                                    font-size:13px;
                                    font-weight:bold;
                                    text-transform:uppercase;
                                    letter-spacing:0.5px;
                                ">
                                    Notification administrateur
                                </p>

                                <h1 style="
                                    margin:0;
                                    color:#111827;
                                    font-size:27px;
                                    line-height:1.3;
                                ">
                                    Une nouvelle commande vient d'être passée
                                </h1>

                                <p style="
                                    margin:14px 0 0 0;
                                    color:#6b7280;
                                    font-size:15px;
                                    line-height:1.6;
                                ">
                                    Une nouvelle commande nécessite votre attention.
                                    Retrouvez ci-dessous tous les détails.
                                </p>

                            </td>
                        </tr>


                        {{-- ORDER SUMMARY --}}
                        <tr>
                            <td class="mobile-padding" style="padding:0 35px 25px 35px;">

                                <table width="100%" role="presentation" style="
                                    background-color:#f8fafc;
                                    border:1px solid #e5e7eb;
                                    border-radius:10px;
                                ">
                                    <tr>

                                        <td style="padding:18px;">

                                            <span style="
                                                display:block;
                                                color:#6b7280;
                                                font-size:12px;
                                                margin-bottom:5px;
                                            ">
                                                NUMÉRO DE COMMANDE
                                            </span>

                                            <strong style="
                                                color:#111827;
                                                font-size:17px;
                                            ">
                                                #{{ $order->id }}
                                            </strong>

                                        </td>

                                        <td style="padding:18px;" align="right">

                                            <span style="
                                                display:block;
                                                color:#6b7280;
                                                font-size:12px;
                                                margin-bottom:5px;
                                            ">
                                                STATUT
                                            </span>

                                            <span style="
                                                display:inline-block;
                                                background-color:#fff4e8;
                                                color:#e87511;
                                                padding:5px 10px;
                                                border-radius:5px;
                                                font-size:12px;
                                                font-weight:bold;
                                            ">
                                                {{ ucfirst(str_replace('_', ' ', $order->status)) }}
                                            </span>

                                        </td>

                                    </tr>
                                </table>

                            </td>
                        </tr>


                        {{-- CUSTOMER INFORMATION --}}
                        <tr>
                            <td class="mobile-padding" style="padding:0 35px 25px 35px;">

                                <h2 style="
                                    margin:0 0 15px 0;
                                    font-size:18px;
                                    color:#111827;
                                ">
                                    Informations du client
                                </h2>

                                <table width="100%" role="presentation">

                                    <tr>
                                        <td style="
                                            padding:10px 0;
                                            color:#6b7280;
                                            font-size:14px;
                                        ">
                                            Nom complet
                                        </td>

                                        <td align="right" style="
                                            padding:10px 0;
                                            color:#111827;
                                            font-size:14px;
                                            font-weight:bold;
                                        ">
                                            {{ $order->first_name }} {{ $order->last_name }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="
                                            padding:10px 0;
                                            color:#6b7280;
                                            font-size:14px;
                                            border-top:1px solid #eeeeee;
                                        ">
                                            Téléphone
                                        </td>

                                        <td align="right" style="
                                            padding:10px 0;
                                            color:#111827;
                                            font-size:14px;
                                            border-top:1px solid #eeeeee;
                                        ">
                                            {{ $order->phone }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="
                                            padding:10px 0;
                                            color:#6b7280;
                                            font-size:14px;
                                            border-top:1px solid #eeeeee;
                                        ">
                                            Adresse
                                        </td>

                                        <td align="right" style="
                                            padding:10px 0;
                                            color:#111827;
                                            font-size:14px;
                                            border-top:1px solid #eeeeee;
                                        ">
                                            {{ $order->address }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="
                                            padding:10px 0;
                                            color:#6b7280;
                                            font-size:14px;
                                            border-top:1px solid #eeeeee;
                                        ">
                                            Ville
                                        </td>

                                        <td align="right" style="
                                            padding:10px 0;
                                            color:#111827;
                                            font-size:14px;
                                            border-top:1px solid #eeeeee;
                                        ">
                                            {{ $order->city }}
                                        </td>
                                    </tr>

                                </table>

                            </td>
                        </tr>


                        {{-- PRODUCTS --}}
                        <tr>
                            <td class="mobile-padding" style="padding:0 35px 25px 35px;">

                                <h2 style="
                                    margin:0 0 15px 0;
                                    font-size:18px;
                                    color:#111827;
                                ">
                                    Détails de la commande
                                </h2>

                                <table
                                    class="product-table"
                                    width="100%"
                                    role="presentation"
                                    cellpadding="0"
                                    cellspacing="0"
                                    style="border:1px solid #e5e7eb; border-radius:8px; overflow:hidden;"
                                >

                                    <thead>
                                        <tr style="background-color:#f8fafc;">

                                            <th align="left" style="
                                                padding:12px;
                                                color:#6b7280;
                                                font-size:12px;
                                                text-transform:uppercase;
                                            ">
                                                Produit
                                            </th>

                                            <th align="center" style="
                                                padding:12px;
                                                color:#6b7280;
                                                font-size:12px;
                                                text-transform:uppercase;
                                            ">
                                                Qté
                                            </th>

                                            <th align="right" style="
                                                padding:12px;
                                                color:#6b7280;
                                                font-size:12px;
                                                text-transform:uppercase;
                                            ">
                                                Prix
                                            </th>

                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach($order->orderItems as $item)

                                            <tr>

                                                <td style="
                                                    padding:14px 12px;
                                                    color:#111827;
                                                    font-size:14px;
                                                    border-top:1px solid #eeeeee;
                                                ">
                                                    {{ $item->product->name ?? 'Produit supprimé' }}
                                                </td>

                                                <td align="center" style="
                                                    padding:14px 12px;
                                                    color:#374151;
                                                    font-size:14px;
                                                    border-top:1px solid #eeeeee;
                                                ">
                                                    {{ $item->quantity }}
                                                </td>

                                                <td align="right" style="
                                                    padding:14px 12px;
                                                    color:#111827;
                                                    font-size:14px;
                                                    font-weight:bold;
                                                    border-top:1px solid #eeeeee;
                                                ">
                                                    {{ number_format($item->price, 2, ',', ' ') }}
                                                </td>

                                            </tr>

                                        @endforeach

                                    </tbody>

                                </table>

                            </td>
                        </tr>


                        {{-- TOTAL --}}
                        <tr>
                            <td class="mobile-padding" style="padding:0 35px 30px 35px;">

                                <table width="100%" role="presentation">

                                    <tr>
                                        <td style="
                                            padding:18px 0 0 0;
                                            border-top:2px solid #111827;
                                        ">

                                            <span style="
                                                color:#374151;
                                                font-size:16px;
                                                font-weight:bold;
                                            ">
                                                Total de la commande
                                            </span>

                                        </td>

                                        <td align="right" style="
                                            padding:18px 0 0 0;
                                            border-top:2px solid #111827;
                                        ">

                                            <span style="
                                                color:#e87511;
                                                font-size:22px;
                                                font-weight:bold;
                                            ">
                                                {{ number_format($order->total, 2, ',', ' ') }}
                                            </span>

                                        </td>

                                    </tr>

                                </table>

                            </td>
                        </tr>


                        {{-- BUTTON --}}
                        <tr>
                            <td align="center" style="padding:0 35px 35px 35px;">

                                <table
                                    class="button"
                                    role="presentation"
                                    cellpadding="0"
                                    cellspacing="0"
                                >
                                    <tr>
                                        <td
                                            align="center"
                                            style="
                                                background-color:#e87511;
                                                border-radius:8px;
                                            "
                                        >

                                            <a
                                                href="{{ route('admin.orders.show', $order->id) }}"
                                                style="
                                                    display:inline-block;
                                                    padding:14px 30px;
                                                    color:#ffffff;
                                                    text-decoration:none;
                                                    font-size:15px;
                                                    font-weight:bold;
                                                "
                                            >
                                                Voir la commande
                                            </a>

                                        </td>
                                    </tr>
                                </table>

                            </td>
                        </tr>


                        {{-- FOOTER --}}
                        <tr>
                            <td style="
                                padding:25px 35px;
                                background-color:#f8fafc;
                                border-top:1px solid #eeeeee;
                                text-align:center;
                            ">

                                <p style="
                                    margin:0;
                                    color:#6b7280;
                                    font-size:13px;
                                    line-height:1.6;
                                ">
                                    Vous recevez cet email parce que vous êtes administrateur
                                    de la plateforme.
                                </p>

                                <p style="
                                    margin:10px 0 0 0;
                                    color:#9ca3af;
                                    font-size:12px;
                                ">
                                    © {{ date('Y') }} — Tous droits réservés.
                                </p>

                            </td>
                        </tr>

                    </table>

                </td>
            </tr>
        </table>

    </td>
</tr>
```

</table>

</body>
</html>
