import { ArrowDown } from "lucide-react"
import { Button } from "@/components/ui/button"

const CodeElements = () => {
  const elements = [
    { content: "</>", top: "15%", left: "8%", delay: "0s" },
    { content: "{ }", top: "25%", right: "12%", delay: "0.5s" },
    { content: "const", top: "60%", left: "5%", delay: "1s" },
    { content: "=>", top: "70%", right: "8%", delay: "1.5s" },
    { content: "function()", top: "35%", left: "15%", delay: "0.3s" },
    { content: "return", top: "80%", left: "12%", delay: "0.8s" },
    { content: "[]", top: "20%", right: "20%", delay: "1.2s" },
    { content: "async", top: "55%", right: "15%", delay: "0.7s" },
    { content: "import", top: "45%", left: "3%", delay: "1.8s" },
    { content: "export", top: "85%", right: "25%", delay: "2s" },
  ]

  return (
    <>
      {elements.map((el, i) => (
        <span
          key={i}
          className="absolute font-mono text-muted-foreground/20 text-sm md:text-base select-none animate-pulse"
          style={{
            top: el.top,
            left: el.left,
            right: el.right,
            animationDelay: el.delay,
            animationDuration: "3s",
          }}
        >
          {el.content}
        </span>
      ))}
    </>
  )
}

const FloatingCard = ({
  children,
  className,
  style,
}: {
  children: React.ReactNode
  className?: string
  style?: React.CSSProperties
}) => (
  <div
    className={`absolute bg-card border border-border rounded-lg px-3 py-2 text-xs font-mono text-muted-foreground shadow-md ${className}`}
    style={style}
  >
    {children}
  </div>
)

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

interface HeroSectionProps {
  profile: Profile | null
}

export function HeroSection({ profile }: HeroSectionProps) {
  const scrollToProjects = () => {
    const element = document.querySelector("#projects")
    if (element) {
      element.scrollIntoView({ behavior: "smooth" })
    }
  }

  if (!profile) {
    return null
  }

  return (
    <section
      id="home"
      className="relative min-h-screen flex items-center bg-hero-bg overflow-hidden"
    >
      <CodeElements />

      <div className="absolute inset-0 opacity-[0.03]">
        <div
          className="absolute inset-0"
          style={{
            backgroundImage: `linear-gradient(var(--foreground) 1px, transparent 1px), linear-gradient(90deg, var(--foreground) 1px, transparent 1px)`,
            backgroundSize: "60px 60px",
          }}
        />
      </div>

      <div className="container relative z-10 px-4 sm:px-6 lg:px-8 py-20 md:py-32">
        <div className="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
          <div className="text-left">
            <span className="inline-flex items-center gap-2 px-3 py-1.5 mb-6 text-xs font-medium rounded-lg bg-card border border-border text-muted-foreground animate-fade-in">
              <span className="w-2 h-2 rounded-full bg-primary animate-pulse" />
              Available for hire
            </span>

            <h1
              className="text-4xl sm:text-5xl md:text-6xl font-bold text-foreground mb-6 leading-tight animate-fade-in-up"
              style={{ animationDelay: "0.1s" }}
            >
              {profile.full_name}
            </h1>

            <p
              className="text-base sm:text-lg text-muted-foreground max-w-xl mb-8 leading-relaxed animate-fade-in-up"
              style={{ animationDelay: "0.2s" }}
            >
              {profile.professional_summary}
            </p>

            <div
              className="flex flex-col sm:flex-row gap-4 animate-fade-in-up"
              style={{ animationDelay: "0.3s" }}
            >
              <Button
                size="lg"
                onClick={scrollToProjects}
                className="font-medium"
              >
                View Projects
                <ArrowDown className="ml-2 h-4 w-4" />
              </Button>
              <Button
                size="lg"
                variant="outline"
                onClick={() =>
                  document
                    .querySelector("#contact")
                    ?.scrollIntoView({ behavior: "smooth" })
                }
                className="font-medium"
              >
                Get in Touch
              </Button>
            </div>
          </div>

          <div className="relative flex justify-center lg:justify-end">
            <div className="relative">
              <div className="absolute -inset-4 rounded-full border border-dashed border-border/50 opacity-30" />
              <div className="absolute -inset-8 rounded-full border border-border/30 opacity-30" />

              <div className="relative w-64 h-64 md:w-80 md:h-80 rounded-full overflow-hidden animate-fade-in shadow-2xl ring-2 ring-border/50 bg-card">
                <div className="relative w-full h-full">
                  <img
                    src="/me.png"
                    alt={profile.full_name}
                    className="w-full h-full object-cover object-center"
                  />
                  <div className="absolute inset-0 bg-gradient-to-br from-black/70 via-black/50 to-black/70" />
                  <div className="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent" />
                  <div className="absolute inset-0 bg-[radial-gradient(ellipse_at_center_top,transparent_0%,rgba(0,0,0,0.6)_70%)]" />
                  <div className="absolute inset-0 bg-gradient-to-r from-black/40 via-transparent to-black/40" />
                </div>
                <div className="absolute -inset-0.5 bg-gradient-to-br from-primary/20 via-transparent to-transparent opacity-50 blur-xl" />
              </div>
            </div>

            <FloatingCard
              className="animate-fade-in hidden md:block"
              style={{
                top: "5%",
                right: "10%",
                animationDelay: "0.5s",
              }}
            >
              <span className="text-primary">const</span> developer = true;
            </FloatingCard>

            <FloatingCard
              className="animate-fade-in hidden md:block"
              style={{
                bottom: "15%",
                left: "-5%",
                animationDelay: "0.7s",
              }}
            >
              <span className="text-foreground">{"<FullStack />"}</span>
            </FloatingCard>

            <FloatingCard
              className="animate-fade-in hidden md:block"
              style={{
                top: "40%",
                right: "-10%",
                animationDelay: "0.9s",
              }}
            >
              <span className="text-muted-foreground">
                npm run <span className="text-primary">build</span>
              </span>
            </FloatingCard>

            <FloatingCard
              className="animate-fade-in hidden md:block"
              style={{
                bottom: "5%",
                right: "20%",
                animationDelay: "1.1s",
              }}
            >
              <span className="text-primary">✓</span> Full Stack Developer
            </FloatingCard>
          </div>
        </div>
      </div>

      <div className="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <div className="flex flex-col items-center gap-2">
          <span className="text-xs text-muted-foreground">Scroll</span>
          <ArrowDown className="h-4 w-4 text-muted-foreground" />
        </div>
      </div>
    </section>
  )
}


