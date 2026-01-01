<?php

namespace Database\Seeders;

use App\Models\Education;
use App\Models\Language;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Reference;
use App\Models\Skill;
use App\Models\SocialLink;
use App\Models\WorkExperience;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedProfile();
        $this->seedWorkExperiences();
        $this->seedEducation();
        $this->seedSkills();
        $this->seedLanguages();
        $this->seedProjects();
        $this->seedReferences();
        $this->seedSocialLinks();
    }

    private function seedProfile(): void
    {
        Profile::create([
            'full_name' => 'Ardavan Shamroshan',
            'email' => 'ardavanshamroshan@yahoo.com',
            'phone' => '+98 (936) 477-1340',
            'address' => 'Tehran, Iran',
            'birth_date' => '2001-06-21',
            'marital_status' => 'Single',
            'military_status' => 'Student Exemption',
            'professional_summary' => 'Full Stack Laravel Developer with over 4 years of experience designing and implementing enterprise, e-commerce, and startup web systems. Expertise in building dynamic and scalable websites, with the ability to work across all aspects of the development process from UI design to server and database implementation. Possessing a diverse set of programming skills and mastery of Front-end and Back-end technologies, committed to Clean Code and SOLID principles, and passionate about leveraging cutting-edge technologies. Experienced in teaching specialized Laravel and PHP courses on YouTube. Passionate about continuous learning and solving complex problems in large-scale projects.',
            'is_active' => true,
            'order' => 0,
        ]);
    }

    private function seedWorkExperiences(): void
    {
        $experiences = [
            [
                'job_title' => 'Tech Lead & CTO',
                'company_name' => 'Arka Modern Technologies',
                'location' => 'Tehran, Iran',
                'start_date' => '2025-09-23',
                'end_date' => null,
                'is_current' => true,
                'description' => 'Led technical direction of e-commerce projects as Tech Lead and CTO at Arka Modern Technologies.',
                'responsibilities' => 'Managed and coordinated technical teams, defined development standards, planned and controlled project execution. Managed recruitment and hiring processes, supervised team performance, and established efficient workflows. Additionally, managed dedicated servers, infrastructure monitoring, and ensured service stability and security.',
                'order' => 0,
            ],
            [
                'job_title' => 'Full Stack Developer & Tech Lead',
                'company_name' => 'IraCode - Iranian Knowledge-Based Company',
                'location' => 'Tehran, Iran',
                'start_date' => '2024-05-21',
                'end_date' => null,
                'is_current' => true,
                'description' => 'Led technical team and managed enterprise and startup projects as Tech Lead at IraCode.',
                'responsibilities' => 'Focused on software architecture design, development lifecycle management, and guiding teams to deliver sustainable, secure, and scalable solutions.',
                'order' => 1,
            ],
            [
                'job_title' => 'Web Service Developer',
                'company_name' => 'Faraz E-Commerce - Khuzestan Science & Technology Park',
                'location' => 'Ahvaz, Khuzestan, Iran',
                'start_date' => '2023-03-21',
                'end_date' => '2024-05-21',
                'is_current' => false,
                'description' => 'Focused on developing and maintaining RESTful APIs for educational and industrial projects.',
                'responsibilities' => 'Contributed to developing the Khuzestan Science & Technology Park admission system with focus on stable and scalable API design. Managed high-volume data and requests during peak traffic periods. Designed authentication and authorization structures for various organizational roles.',
                'order' => 2,
            ],
            [
                'job_title' => 'PHP/Laravel Developer & Instructor',
                'company_name' => 'APA Cybersecurity Center (Shahid Chamran University of Ahvaz)',
                'location' => 'Ahvaz, Khuzestan, Iran',
                'start_date' => '2021-11-22',
                'end_date' => '2023-03-21',
                'is_current' => false,
                'description' => 'Taught specialized web programming courses with PHP and Laravel following academic and industry standards.',
                'responsibilities' => 'Taught Back-end Development concepts including MVC architecture, Laravel framework structure, and common software development patterns. Taught Secure Coding principles and secure web development.',
                'order' => 3,
            ],
        ];

        foreach ($experiences as $experience) {
            WorkExperience::create($experience);
        }
    }

    private function seedEducation(): void
    {
        Education::create([
            'degree' => 'Bachelor of Science',
            'field_of_study' => 'Computer Engineering',
            'institution' => 'Shahid Chamran University of Ahvaz',
            'location' => 'Ahvaz, Khuzestan, Iran',
            'start_date' => '2019-09-23',
            'end_date' => '2024-06-22',
            'is_current' => false,
            'description' => null,
            'order' => 0,
        ]);
    }

    private function seedSkills(): void
    {
        $skills = [
            ['name' => 'PHP', 'category' => 'Back-end Development', 'logo_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg', 'has_logo' => true, 'order' => 0],
            ['name' => 'Laravel', 'category' => 'Back-end Development', 'logo_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg', 'has_logo' => true, 'order' => 1],
            ['name' => 'Livewire', 'category' => 'Back-end Development', 'logo_url' => 'https://cdn.jsdelivr.net/gh/livewire/livewire@main/art/logo.svg', 'has_logo' => true, 'order' => 2],
            ['name' => 'FilamentPHP', 'category' => 'Back-end Development', 'logo_url' => 'https://filamentphp.com/favicon/apple-touch-icon.png', 'has_logo' => true, 'order' => 3],
            ['name' => 'RESTful API', 'category' => 'Back-end Development', 'logo_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg', 'has_logo' => true, 'order' => 4],
            ['name' => 'Docker', 'category' => 'DevOps', 'logo_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg', 'has_logo' => true, 'order' => 0],
            ['name' => 'CI/CD', 'category' => 'DevOps', 'logo_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gitlab/gitlab-original.svg', 'has_logo' => true, 'order' => 1],
            ['name' => 'GitLab', 'category' => 'DevOps', 'logo_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gitlab/gitlab-original.svg', 'has_logo' => true, 'order' => 2],
            ['name' => 'DevOps', 'category' => 'DevOps', 'logo_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg', 'has_logo' => true, 'order' => 3],
            ['name' => 'GitLab Runners', 'category' => 'DevOps', 'logo_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gitlab/gitlab-original.svg', 'has_logo' => true, 'order' => 4],
            ['name' => 'MySQL', 'category' => 'Database Management', 'logo_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg', 'has_logo' => true, 'order' => 0],
            ['name' => 'SQLite', 'category' => 'Database Management', 'logo_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original.svg', 'has_logo' => true, 'order' => 1],
            ['name' => 'ReactJS', 'category' => 'Front-end Development', 'logo_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg', 'has_logo' => true, 'order' => 0],
            ['name' => 'AlpineJS', 'category' => 'Front-end Development', 'logo_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg', 'has_logo' => true, 'order' => 1],
            ['name' => 'TailwindCSS', 'category' => 'Front-end Development', 'logo_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg', 'has_logo' => true, 'order' => 2],
            ['name' => 'JavaScript', 'category' => 'Front-end Development', 'logo_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg', 'has_logo' => true, 'order' => 3],
            ['name' => 'SOLID', 'category' => 'Software Engineering Principles', 'logo_url' => null, 'has_logo' => false, 'order' => 0],
            ['name' => 'Clean Code', 'category' => 'Software Engineering Principles', 'logo_url' => null, 'has_logo' => false, 'order' => 1],
            ['name' => 'Modular & Scalable Architecture', 'category' => 'Software Engineering Principles', 'logo_url' => null, 'has_logo' => false, 'order' => 2],
            ['name' => 'PHPUnit', 'category' => 'Testing & Quality', 'logo_url' => 'https://phpunit.de/img/phpunit.svg', 'has_logo' => true, 'order' => 0],
            ['name' => 'Pest', 'category' => 'Testing & Quality', 'logo_url' => 'https://pestphp.com/assets/img/logo.svg', 'has_logo' => true, 'order' => 1],
            ['name' => 'Unit Testing', 'category' => 'Testing & Quality', 'logo_url' => null, 'has_logo' => false, 'order' => 2],
            ['name' => 'Project Management', 'category' => 'Other Skills', 'logo_url' => null, 'has_logo' => false, 'order' => 0],
            ['name' => 'Documentation', 'category' => 'Other Skills', 'logo_url' => null, 'has_logo' => false, 'order' => 1],
            ['name' => 'Teaching & Content Creation', 'category' => 'Other Skills', 'logo_url' => null, 'has_logo' => false, 'order' => 2],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }

    private function seedLanguages(): void
    {
        Language::create([
            'name' => 'English',
            'proficiency_level' => 'Advanced',
            'description' => 'Reading technical resources, documentation, and professional conversations',
            'order' => 0,
        ]);
    }

    private function seedProjects(): void
    {
        $projects = [
            [
                'title' => 'Dareem Shop - Jewelry E-Commerce Platform',
                'description' => 'A specialized multi-vendor e-commerce platform for jewelry and precious metals, designed to provide a secure and professional environment for high-value online sales.',
                'detailed_description' => 'This system enables management of multiple vendors, product registration and management, orders, and online payments, creating a simple, transparent, and trustworthy shopping experience for users.',
                'image_url' => '/projects/dareem.shop.png',
                'category' => 'Development',
                'client_name' => 'Arka Modern Technologies',
                'project_date' => '2025-09-23',
                'live_url' => 'https://dareem.shop',
                'github_url' => null,
                'features' => 'Multi-vendor e-commerce system, product management, order management, online payments',
                'role' => 'Technical maintenance and support in production environment, development and implementation of new features aligned with market and user needs',
                'order' => 0,
                'is_featured' => true,
            ],
            [
                'title' => 'Dareem Pay - FinTech Credit & Installment Platform',
                'description' => 'A FinTech platform similar to Snapp Pay and Digi Pay that enables users to receive bank credit and make installment purchases.',
                'detailed_description' => 'In this system, users receive a credit line after completing identity verification and credit assessment, which they can use to receive loans or make installment purchases from connected stores.',
                'image_url' => '/projects/dareempay.png',
                'category' => 'Development',
                'client_name' => 'Arka Modern Technologies',
                'project_date' => '2025-09-23',
                'live_url' => 'https://dareempay.com',
                'github_url' => null,
                'features' => 'Credit system, transaction management, repayment, identity verification',
                'role' => 'Lead developer in implementing key system components',
                'order' => 1,
                'is_featured' => true,
            ],
            [
                'title' => 'Brian Etemad Academy - Online University & Subscription Learning Platform',
                'description' => 'A comprehensive platform that functions as an online university with advanced features.',
                'detailed_description' => 'User registration and management system with different access levels, subscription-based model with various plans (Basic, Premium, VIP), access to online courses, exclusive podcasts and videos, discussion forums and networking, valid online certification upon course or subscription completion',
                'image_url' => '/projects/brianetemadacademy.png',
                'category' => 'Development',
                'client_name' => 'IraCode - Iranian Knowledge-Based Company',
                'project_date' => '2024-04-20',
                'live_url' => 'https://brianetemadacademy.com',
                'github_url' => null,
                'features' => 'Subscription system, online courses, podcasts and videos, discussion forums, certification, international payment gateway',
                'role' => 'Collaborated in developing large-scale SaaS systems',
                'order' => 2,
                'is_featured' => true,
            ],
            [
                'title' => 'Khuzestan Science & Technology Park Admission System',
                'description' => 'Designed admission system for registering and reviewing knowledge-based company applications.',
                'detailed_description' => 'Features include: company registration and document submission, admin panel for reviewing applications, advanced reporting system',
                'image_url' => '/projects/paziresh.khstp.png',
                'category' => 'Development',
                'client_name' => 'Faraz E-Commerce / Khuzestan Science & Technology Park',
                'project_date' => '2024-02-19',
                'live_url' => 'https://paziresh.khstp.ir',
                'github_url' => null,
                'features' => 'Company registration, admin panel, reporting',
                'role' => 'Contributed to development with focus on stable API design',
                'order' => 3,
                'is_featured' => false,
            ],
            [
                'title' => 'Izdihur Arya - Third-Party Audit & Destructive Testing Services Platform',
                'description' => 'A system for managing commercial and industrial services that helped Izdihur Arya digitize internal processes and customer communications.',
                'detailed_description' => 'Main features: Customer management module (CRM), order and contract management system, product and service database, management and financial reports',
                'image_url' => '/projects/cbiha.png',
                'category' => 'Development',
                'client_name' => 'IraCode - Iranian Knowledge-Based Company',
                'project_date' => '2024-10-22',
                'live_url' => null,
                'github_url' => null,
                'features' => 'CRM, order management, product database, reporting',
                'role' => 'Development and consulting',
                'order' => 4,
                'is_featured' => false,
            ],
            [
                'title' => 'Payesh - Red Crescent Security Admission System',
                'description' => 'Developed to digitize the Red Crescent security admission process, the Payesh system organizes and manages registration, management, and reporting processes for Red Crescent security centers.',
                'detailed_description' => 'Enterprise project for managing admission and registration processes at the national level. Designed security modules and workflows for managing sensitive information.',
                'image_url' => null,
                'category' => 'Development',
                'client_name' => 'IraCode - Iranian Knowledge-Based Company',
                'project_date' => '2024-05-21',
                'live_url' => null,
                'github_url' => null,
                'features' => 'Admission and registration, center management, reporting, security modules',
                'role' => 'Design and development',
                'order' => 5,
                'is_featured' => false,
            ],
            [
                'title' => 'Petro Engine - Oil & Gas Industry Marketplace',
                'description' => 'A specialized marketplace for oil, gas, and petrochemical industries where companies and individuals can register buy and sell equipment listings.',
                'detailed_description' => 'Features include: user registration and login with different access levels, listing registration with full details and images, specialized categories for energy industries, advanced search and filter system',
                'image_url' => '/projects/petroengin.png',
                'category' => 'Development',
                'client_name' => 'Faraz E-Commerce',
                'project_date' => '2023-05-21',
                'live_url' => 'https://petroengine.com',
                'github_url' => null,
                'features' => 'Listing registration, specialized categories, search and filter',
                'role' => 'Development',
                'order' => 6,
                'is_featured' => false,
            ],
            [
                'title' => 'Heallan - Massage & Beauty Services Startup',
                'description' => 'Heallan is an innovative startup in health, massage, and beauty services that allows customers to book massage and beauty services online at massage and beauty salons.',
                'detailed_description' => 'Key features: app and website with online booking system, registration and verification of specialists (masseurs and beauty experts), dedicated panel for specialists including schedule management, income, and professional profile, online payment system and internal wallet',
                'image_url' => '/projects/heallan.png',
                'category' => 'Development',
                'client_name' => 'IraCode - Iranian Knowledge-Based Company',
                'project_date' => '2024-11-22',
                'live_url' => 'https://heallan.ir',
                'github_url' => null,
                'features' => 'Online booking, specialist verification, specialist panel, online payment',
                'role' => 'Development',
                'order' => 7,
                'is_featured' => false,
            ],
            [
                'title' => 'Game Price - Video Game Services Store',
                'description' => 'Designed and developed an online store for selling legal PlayStation accounts and digital gaming products.',
                'detailed_description' => 'Features include: order management system, admin panel for adding games and products, integration with online payment gateway',
                'image_url' => '/projects/gpgaming.png',
                'category' => 'Development',
                'client_name' => 'Morteza Shirdel',
                'project_date' => '2023-08-23',
                'live_url' => 'https://gpgaming.ir',
                'github_url' => null,
                'features' => 'Online store, product management, online payment',
                'role' => 'Development',
                'order' => 8,
                'is_featured' => false,
            ],
            [
                'title' => 'APA Cybersecurity Center Official Website - Shahid Chamran University',
                'description' => 'Designed and implemented the official APA Center website for information and support of university cybersecurity activities.',
                'detailed_description' => 'Features include: cybersecurity news and announcements section, security incident reporting portal, online learning system',
                'image_url' => null,
                'category' => 'Development',
                'client_name' => 'APA Center under Eng. Mehrdad Sarkheki',
                'project_date' => '2022-04-20',
                'live_url' => 'https://apa.scu.ac.ir',
                'github_url' => null,
                'features' => 'News and announcements, incident reporting portal, online learning system',
                'role' => 'Design and development',
                'order' => 9,
                'is_featured' => false,
            ],
            [
                'title' => 'Language School Management System (Dr. Mardani & Ariana)',
                'description' => 'Designed two projects with similar scenarios but different architectures: Dr. Mardani version implemented as Full Stack (Laravel + Livewire). Ariana version developed as Back-end (Laravel API) and Front-end (ReactJS).',
                'detailed_description' => 'Features: course and instructor management, online registration and payment, student panel with ability to view classes and transcripts, management reporting',
                'image_url' => '/projects/mardanilang.png',
                'category' => 'Development',
                'client_name' => 'Mehdi Mardani',
                'project_date' => '2023-05-21',
                'live_url' => 'https://mardanilang.ir',
                'github_url' => null,
                'features' => 'Course management, registration and payment, student panel',
                'role' => 'Development',
                'order' => 10,
                'is_featured' => false,
            ],
            [
                'title' => 'Larapods - Specialized Laravel Education YouTube Channel',
                'description' => 'Launched an educational channel aimed at filling the gap in Persian resources for Laravel education.',
                'detailed_description' => 'Produced over 100 hours of educational content covering topics such as: Livewire, FilamentPHP, Query optimization with Eloquent, writing unit tests with PHPUnit and Pest',
                'image_url' => '/projects/larapods.png',
                'category' => 'Other',
                'client_name' => 'Ardavan Shamroshan',
                'project_date' => '2023-01-01',
                'live_url' => 'https://youtube.com/@larapods',
                'github_url' => null,
                'features' => 'Laravel education, Livewire, FilamentPHP',
                'role' => 'Content creation',
                'order' => 11,
                'is_featured' => false,
            ],
        ];

        $phpSkill = Skill::where('name', 'PHP')->first();
        $laravelSkill = Skill::where('name', 'Laravel')->first();
        $reactSkill = Skill::where('name', 'ReactJS')->first();
        $mysqlSkill = Skill::where('name', 'MySQL')->first();
        $livewireSkill = Skill::where('name', 'Livewire')->first();
        $filamentSkill = Skill::where('name', 'FilamentPHP')->first();

        foreach ($projects as $index => $projectData) {
            $project = Project::create($projectData);

            if ($phpSkill) {
                $project->skills()->attach($phpSkill->id);
            }
            if ($laravelSkill) {
                $project->skills()->attach($laravelSkill->id);
            }
            if ($reactSkill && in_array($index, [2, 10])) {
                $project->skills()->attach($reactSkill->id);
            }
            if ($mysqlSkill) {
                $project->skills()->attach($mysqlSkill->id);
            }
            if ($livewireSkill && in_array($index, [10])) {
                $project->skills()->attach($livewireSkill->id);
            }
            if ($filamentSkill && in_array($index, [11])) {
                $project->skills()->attach($filamentSkill->id);
            }
        }
    }

    private function seedReferences(): void
    {
        $references = [
            [
                'name' => 'Eng. Kazem Memari',
                'position' => 'CEO',
                'company' => 'IraCode - Iranian Knowledge-Based Company',
                'phone' => '+98 912 931 3368',
                'email' => null,
                'relationship' => null,
                'order' => 0,
            ],
            [
                'name' => 'Eng. Mehrdad Sarkheki',
                'position' => 'Director',
                'company' => 'APA Cybersecurity Center (Awareness, Support, Assistance) - Shahid Chamran University of Ahvaz',
                'phone' => '+98 993 575 7528',
                'email' => 'info@cert.scu.ac.ir',
                'relationship' => null,
                'order' => 1,
            ],
            [
                'name' => 'Eng. Mansour Shokat',
                'position' => 'CEO',
                'company' => 'Faraz E-Commerce',
                'phone' => '+98 916 060 3015',
                'email' => 'mansour.shokat@gmail.com',
                'relationship' => null,
                'order' => 2,
            ],
            [
                'name' => 'Eng. Fateme Ebrahimi',
                'position' => 'Project Manager',
                'company' => 'IraCode - Iranian Knowledge-Based Company',
                'phone' => '+98 919 080 4416',
                'email' => null,
                'relationship' => null,
                'order' => 3,
            ],
            [
                'name' => 'Eng. Mojtaba Tabesh',
                'position' => 'Director',
                'company' => 'Web Tanan - Global Web Gateway',
                'phone' => '+98 912 056 052',
                'email' => 'info@webtanan.com',
                'relationship' => null,
                'order' => 4,
            ],
        ];

        foreach ($references as $reference) {
            Reference::create($reference);
        }
    }

    private function seedSocialLinks(): void
    {
        $socialLinks = [
            ['platform' => 'GitHub', 'url' => 'https://github.com/larapods', 'icon' => 'Github', 'order' => 0, 'is_active' => true],
            ['platform' => 'LinkedIn', 'url' => 'https://linkedin.com/in/ardavan-shamroshan-60597b231', 'icon' => 'Linkedin', 'order' => 1, 'is_active' => true],
            ['platform' => 'Instagram', 'url' => 'https://instagram.com/ardavanshamroshan', 'icon' => 'Instagram', 'order' => 2, 'is_active' => true],
            ['platform' => 'Telegram', 'url' => 'https://t.me/larapods', 'icon' => 'MessageCircle', 'order' => 3, 'is_active' => true],
            ['platform' => 'YouTube', 'url' => 'https://youtube.com/@larapods', 'icon' => 'Youtube', 'order' => 4, 'is_active' => true],
            ['platform' => 'Email', 'url' => 'mailto:ardavanshamroshan@yahoo.com', 'icon' => 'Mail', 'order' => 5, 'is_active' => true],
        ];

        foreach ($socialLinks as $link) {
            SocialLink::create($link);
        }
    }
}
