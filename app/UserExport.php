<?php

namespace App;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class UserExport implements FromCollection, WithHeadings, WithMapping
{

    public function headings(): array
    {
        return [
            'Status',
            'Name',
            'BaselHack E-Mail',
            'Private E-Mail',
            'Mobile',
            'Github',
            'Member since'
        ];
    }

    public function map($member): array
    {
        return [
            $member->status,
            $member->name,
            $member->email,
            $member->redirect_email,
            $member->mobile,
            $member->github,
            optional($member->member_since)->diffForHumans(),
        ];
    }

    public function collection()
    {
        return User::all();
    }
}