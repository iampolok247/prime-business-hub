<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\CaseStudy;
use App\Models\Faq;
use App\Models\FaqCategory;
use App\Models\Page;
use App\Models\SeoSetting;
use App\Models\Service;
use App\Models\ServiceFeature;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CmsDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $home = Page::query()->firstOrCreate(
            ['slug' => 'home'],
            ['title' => 'Home', 'template' => 'home', 'content' => 'Home page content', 'is_published' => true, 'published_at' => now()]
        );

        SeoSetting::query()->updateOrCreate(
            ['page_key' => 'home'],
            [
                'meta_title' => 'Childminding Business Launch | Launch Your Own Childminding Business',
                'meta_description' => 'We build your complete childminding business from idea to income.',
                'keywords' => 'childminding business launch, ofsted registration, childminder startup uk',
            ]
        );

        $serviceNames = [
            'Childminding Business Launch',
            'Business Planning',
            'Registration Support',
            'Ofsted Preparation',
            'Marketing Support',
            'Ongoing Mentorship',
        ];

        foreach ($serviceNames as $name) {
            $service = Service::query()->firstOrCreate(
                ['slug' => Str::slug($name)],
                [
                    'name' => $name,
                    'category' => 'Core Service',
                    'excerpt' => "Premium {$name} support for aspiring childminders.",
                    'description' => "Comprehensive {$name} designed for UK compliance and growth.",
                    'is_published' => true,
                    'benefits' => ['Compliance-first process', 'Done-for-you templates', 'Expert mentorship'],
                ]
            );

            ServiceFeature::query()->firstOrCreate(
                ['service_id' => $service->id, 'title' => 'Expert-led step-by-step guidance'],
                ['description' => 'Guided delivery with practical implementation support.', 'sort_order' => 1]
            );
        }

        $faqCategory = FaqCategory::query()->firstOrCreate(['slug' => 'registration'], ['name' => 'Registration']);
        Faq::query()->firstOrCreate(
            ['question' => 'How long does registration take?'],
            ['faq_category_id' => $faqCategory->id, 'answer' => 'Most clients launch in 8 to 16 weeks depending on readiness.', 'is_published' => true]
        );

        Testimonial::query()->delete();
        CaseStudy::query()->delete();

        $testimonials = [
            [
                'name' => 'Aisha Rahman',
                'role' => 'Childminder',
                'location' => 'London',
                'rating' => 5,
                'quote' => 'Prime Business Hub gave me a clear launch plan and practical support every week. I moved from confusion to opening with confidence.',
                'metrics' => ['enquiries' => 18],
            ],
            [
                'name' => 'Nadia Hussain',
                'role' => 'Childminder',
                'location' => 'Birmingham',
                'rating' => 5,
                'quote' => 'Their compliance guidance was excellent. The templates and checklists saved me time and helped me prepare properly for registration.',
                'metrics' => ['enquiries' => 14],
            ],
            [
                'name' => 'Rebecca Allen',
                'role' => 'Childminder',
                'location' => 'Manchester',
                'rating' => 5,
                'quote' => 'The marketing support made a big difference. I started receiving quality family enquiries within weeks of launch.',
                'metrics' => ['enquiries' => 21],
            ],
            [
                'name' => 'Sabrina Williams',
                'role' => 'Childminder',
                'location' => 'Leeds',
                'rating' => 5,
                'quote' => 'Professional, responsive and genuinely supportive. They made the business side simple so I could focus on childcare quality.',
                'metrics' => ['enquiries' => 12],
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::query()->create([
                ...$testimonial,
                'company' => null,
                'is_featured' => true,
                'is_published' => true,
            ]);
        }

        $caseStudies = [
            [
                'title' => 'From Idea To Registered Launch In 12 Weeks',
                'client_name' => 'Aisha Rahman',
                'challenge' => 'Client was unsure how to structure registration tasks and documentation.',
                'solution' => 'Created a weekly implementation roadmap with policy templates and compliance milestones.',
                'result' => 'Completed registration preparation in 12 weeks and launched with 8 confirmed family enquiries in month one.',
                'success_metrics' => ['monthly_income' => 3100],
            ],
            [
                'title' => 'Improving Compliance Confidence Before Inspection',
                'client_name' => 'Nadia Hussain',
                'challenge' => 'Client felt unprepared for inspection expectations and safeguarding evidence.',
                'solution' => 'Delivered structured readiness sessions and document review support.',
                'result' => 'Client entered inspection process confidently with complete documentation and clear operational standards.',
                'success_metrics' => ['monthly_income' => 2800],
            ],
            [
                'title' => 'First 10 Family Enquiries Through Local Marketing',
                'client_name' => 'Rebecca Allen',
                'challenge' => 'Client needed a reliable method to attract enquiries quickly after setup.',
                'solution' => 'Implemented local outreach strategy, profile messaging updates and lead-response workflow.',
                'result' => 'Generated first 10 qualified enquiries within 6 weeks and converted multiple long-term clients.',
                'success_metrics' => ['monthly_income' => 3600],
            ],
        ];

        foreach ($caseStudies as $item) {
            CaseStudy::query()->create([
                ...$item,
                'slug' => Str::slug($item['title']),
                'is_published' => true,
                'published_at' => now(),
            ]);
        }

        $category = BlogCategory::query()->firstOrCreate(['slug' => 'business-setup'], ['name' => 'Business Setup']);
        $tag = BlogTag::query()->firstOrCreate(['slug' => 'ofsted'], ['name' => 'Ofsted']);
        $author = User::query()->first();

        Blog::query()->each(function (Blog $blog): void {
            $blog->tags()->detach();
        });
        Blog::query()->delete();

        $blogs = [
            [
                'title' => 'How To Start A Childminding Business In The UK',
                'excerpt' => 'A step-by-step overview covering planning, registration, compliance and launch essentials.',
                'content' => "Starting a childminding business requires a clear plan, structured preparation and strong compliance standards.\n\nBegin by defining your service model, target families and location strategy. Then map required registration actions, safeguarding processes and policy documentation.\n\nA launch plan works best when broken into weekly milestones. Focus on setup, readiness checks and communication systems early so you can move into client acquisition with confidence.",
            ],
            [
                'title' => 'Ofsted Readiness Checklist For New Childminders',
                'excerpt' => 'Key checks and documentation areas to review before your registration and inspection stages.',
                'content' => "Ofsted readiness is easier when you use a repeatable checklist.\n\nPrioritize safeguarding records, risk assessments, policies, procedures and evidence of operational standards.\n\nReview your environment, communication protocols and emergency processes regularly. A structured checklist helps reduce stress and improves confidence before inspection.",
            ],
            [
                'title' => 'Pricing Your Childminding Service For Sustainable Growth',
                'excerpt' => 'How to set rates that reflect value, support quality service delivery and protect business margins.',
                'content' => "Pricing should balance local demand, service quality and operating costs.\n\nAvoid setting rates purely by competitors. Instead, calculate your required revenue, delivery capacity and value positioning.\n\nReview pricing quarterly and align adjustments with service improvements and family experience outcomes.",
            ],
            [
                'title' => 'How To Attract Your First 10 Family Enquiries',
                'excerpt' => 'Practical marketing actions that help new childminders generate local visibility and trust.',
                'content' => "Early enquiries usually come from local visibility and trust signals.\n\nBuild a clear online profile, publish your service values and respond quickly to messages.\n\nUse community channels, referral touchpoints and simple lead follow-up processes to increase conversion consistency.",
            ],
            [
                'title' => 'The Essential Policies Every Childminding Business Needs',
                'excerpt' => 'A practical guide to policy areas that support compliance, safeguarding and day-to-day operations.',
                'content' => "Policies protect both your business and the families you serve.\n\nKey areas include safeguarding, health and safety, behavior, complaints, equal opportunities and emergency planning.\n\nKeep policies clear, current and easy to communicate. Regular review improves consistency and compliance confidence.",
            ],
            [
                'title' => 'Building A Weekly Operations System That Saves Time',
                'excerpt' => 'Create repeatable routines for planning, communication, administration and service quality.',
                'content' => "Operational consistency is critical for sustainable growth.\n\nUse weekly planning blocks for admin, parent communication, compliance checks and marketing actions.\n\nSmall routines reduce overwhelm and create predictable business progress over time.",
            ],
        ];

        foreach ($blogs as $item) {
            $blog = Blog::query()->create([
                'blog_category_id' => $category->id,
                'user_id' => $author?->id,
                'title' => $item['title'],
                'slug' => Str::slug($item['title']),
                'excerpt' => $item['excerpt'],
                'content' => $item['content'],
                'status' => 'published',
                'published_at' => now(),
                'read_time' => 6,
                'views' => 100,
            ]);

            $blog->tags()->syncWithoutDetaching([$tag->id]);
        }

        Setting::query()->updateOrCreate(['key' => 'site_name'], ['group' => 'general', 'type' => 'text', 'value' => 'Prime Business Hub']);
    }
}
