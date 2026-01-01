import { Header } from "@/components/portfolio/Header"
import { HeroSection } from "@/components/portfolio/HeroSection"
import { ProjectsSection } from "@/components/portfolio/ProjectsSection"
import { TechnologiesSection } from "@/components/portfolio/TechnologiesSection"
import { ContactSection } from "@/components/portfolio/ContactSection"
import { Footer } from "@/components/portfolio/Footer"
import { Toaster } from "@/components/ui/toaster"

interface Profile {
  id: number
  full_name: string
  email: string
  phone: string | null
  address: string | null
  birth_date: string | null
  marital_status: string | null
  military_status: string | null
  professional_summary: string
  photo_path: string | null
  is_active: boolean
  order: number
}

interface WorkExperience {
  id: number
  job_title: string
  company_name: string
  location: string | null
  start_date: string
  end_date: string | null
  is_current: boolean
  description: string | null
  responsibilities: string | null
  order: number
}

interface Education {
  id: number
  degree: string
  field_of_study: string | null
  institution: string
  location: string | null
  start_date: string
  end_date: string | null
  is_current: boolean
  description: string | null
  order: number
}

interface Skill {
  id: number
  name: string
  category: string | null
  logo_url: string | null
  has_logo: boolean
  order: number
}

interface Language {
  id: number
  name: string
  proficiency_level: string
  description: string | null
  order: number
}

interface Project {
  id: number
  title: string
  description: string
  detailed_description: string | null
  image_url: string | null
  category: string | null
  client_name: string | null
  project_date: string | null
  live_url: string | null
  github_url: string | null
  features: string | null
  role: string | null
  order: number
  is_featured: boolean
  skills: Skill[]
}

interface Reference {
  id: number
  name: string
  position: string | null
  company: string | null
  email: string | null
  phone: string | null
  relationship: string | null
  order: number
}

interface SocialLink {
  id: number
  platform: string
  url: string
  icon: string | null
  order: number
  is_active: boolean
}

interface PortfolioPageProps {
  profile: Profile | null
  workExperiences: WorkExperience[]
  educations: Education[]
  skills: Record<string, Skill[]>
  languages: Language[]
  projects: Project[]
  references: Reference[]
  socialLinks: SocialLink[]
}

export default function Index({
  profile,
  workExperiences,
  educations,
  skills,
  languages,
  projects,
  references,
  socialLinks,
}: PortfolioPageProps) {
  return (
    <div className="min-h-screen bg-background">
      <Toaster />
      <Header />
      <main>
        <HeroSection profile={profile} />
        <ProjectsSection projects={projects} />
        <TechnologiesSection skills={skills} />
        <ContactSection />
      </main>
      <Footer socialLinks={socialLinks} profile={profile} />
    </div>
  )
}


