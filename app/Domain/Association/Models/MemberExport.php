<?php

namespace App\Domain\Association\Models;

use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class MemberExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    public function headings(): array
    {
        return [
            'Status',
            'Firstname',
            'Lastname',
            'Birthdate',
            'E-Mail',
            'Mobile',
            'Github',
            'Member-Since',
        ];
    }

    public function map($member): array
    {
        return [
            $member->status,
            $member->firstname,
            $member->lastname,
            $member->birthdate,
            $member->email,
            $member->mobile,
            $member->github,
            optional($member->member_since)->diffForHumans(),
        ];
    }

    public function collection()
    {
        return Member::all();
    }
}
