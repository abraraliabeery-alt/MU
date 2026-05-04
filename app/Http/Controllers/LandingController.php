<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function __invoke(Request $request)
    {
        $whatsAppNumber = '966530583313';
        $whatsAppMessage = app()->getLocale() === 'ar'
            ? 'مرحبًا، أود طلب استشارة قانونية.'
            : 'Hi, I would like to request a legal consultation.';

        $whatsAppUrl = 'https://wa.me/' . $whatsAppNumber . '?text=' . urlencode($whatsAppMessage);

        $services = [
            [
                'value' => 'consult',
                'label_ar' => 'استشارة',
                'label_en' => 'Consultation',
            ],
            [
                'value' => 'notary',
                'label_ar' => 'توثيق',
                'label_en' => 'Notarization',
            ],
            [
                'value' => 'contract',
                'label_ar' => 'عقد / صياغة',
                'label_en' => 'Contract / Drafting',
            ],
            [
                'value' => 'case',
                'label_ar' => 'قضية / تمثيل',
                'label_en' => 'Case / Representation',
            ],
        ];

        return view('landing', [
            'whatsAppUrl' => $whatsAppUrl,
            'services' => $services,
        ]);
    }
}
