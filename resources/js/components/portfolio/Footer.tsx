import { Github, Linkedin, Twitter, Mail, Heart, Youtube, MessageCircle, Instagram } from "lucide-react"
import type { ComponentType } from "react"

interface SocialLink {
  id: number
  platform: string
  url: string
  icon: string | null
  order: number
  is_active: boolean
}

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

interface FooterProps {
  socialLinks: SocialLink[]
  profile: Profile | null
}

const iconMap: Record<string, ComponentType<{ className?: string }>> = {
  Github,
  Linkedin,
  Twitter,
  Mail,
  Youtube,
  MessageCircle,
  Instagram,
}

const footerLinks = [
  { label: "Home", href: "#home" },
  { label: "Projects", href: "#projects" },
  { label: "Technologies", href: "#technologies" },
  { label: "Contact", href: "#contact" },
]

export function Footer({ socialLinks, profile }: FooterProps) {
  const scrollToSection = (href: string) => {
    const element = document.querySelector(href)
    if (element) {
      element.scrollIntoView({ behavior: "smooth" })
    }
  }

  return (
    <footer className="bg-gradient-hero text-primary-foreground">
      <div className="container px-4 sm:px-6 lg:px-8 py-12">
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div className="space-y-4">
            <h3 className="text-xl font-bold">{profile?.full_name || "Portfolio"}</h3>
            <p className="text-primary-foreground/70 text-sm leading-relaxed">
              {profile?.professional_summary || "Building modern web applications with clean code and thoughtful design."}
            </p>
          </div>

          <div className="space-y-4">
            <h4 className="text-lg font-semibold">Quick Links</h4>
            <nav className="flex flex-col gap-2">
              {footerLinks.map((link) => (
                <a
                  key={link.href}
                  href={link.href}
                  onClick={(e) => {
                    e.preventDefault()
                    scrollToSection(link.href)
                  }}
                  className="text-sm text-primary-foreground/70 hover:text-primary-foreground transition-colors"
                >
                  {link.label}
                </a>
              ))}
            </nav>
          </div>

          <div className="space-y-4">
            <h4 className="text-lg font-semibold">Connect</h4>
            <div className="flex gap-3">
              {socialLinks.map((link) => {
                const IconComponent = link.icon && iconMap[link.icon] ? iconMap[link.icon] : Mail
                return (
                  <a
                    key={link.id}
                    href={link.url}
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label={link.platform}
                    className="p-2 rounded-lg bg-primary-foreground/10 hover:bg-primary-foreground/20 text-primary-foreground transition-colors"
                  >
                    <IconComponent className="h-5 w-5" />
                  </a>
                )
              })}
            </div>
          </div>
        </div>

        <div className="mt-12 pt-8 border-t border-primary-foreground/10">
          <p className="text-center text-sm text-primary-foreground/60 flex items-center justify-center gap-1">
            ساخته شده با <Heart className="h-4 w-4 text-red-400 fill-red-400" /> © {new Date().getFullYear()} {profile?.full_name || "Portfolio"}. تمامی حقوق محفوظ است.
          </p>
        </div>
      </div>
    </footer>
  )
}


