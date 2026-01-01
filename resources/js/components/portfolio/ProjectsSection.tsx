import { useMemo, useState } from "react"
import { ExternalLink, Github } from "lucide-react"
import { Tabs, TabsContent, TabsList, TabsTrigger } from "@/components/ui/tabs"
import { Card, CardContent } from "@/components/ui/card"
import { Badge } from "@/components/ui/badge"
import { Button } from "@/components/ui/button"

interface Skill {
  id: number
  name: string
  category: string | null
  logo_url: string | null
  has_logo: boolean
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

interface ProjectsSectionProps {
  projects: Project[]
}

export function ProjectsSection({ projects }: ProjectsSectionProps) {
  const categories = useMemo(() => {
    const cats = new Set<string>(["All"])
    projects.forEach((project) => {
      if (project.category) {
        cats.add(project.category)
      }
    })
    return Array.from(cats)
  }, [projects])

  const [activeCategory, setActiveCategory] = useState("All")

  const filteredProjects = useMemo(() => {
    if (activeCategory === "All") {
      return projects
    }
    return projects.filter((project) => project.category === activeCategory)
  }, [projects, activeCategory])

  return (
    <section id="projects" className="py-20 md:py-32 bg-surface">
      <div className="container px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h2 className="text-3xl sm:text-4xl md:text-5xl font-bold text-foreground mb-4">
            Featured Projects
          </h2>
          <p className="text-lg text-muted-foreground max-w-2xl mx-auto">
            A showcase of my recent work across different domains and technologies.
          </p>
        </div>

        <Tabs value={activeCategory} onValueChange={setActiveCategory} className="w-full">
          <div className="flex justify-center mb-10">
            <TabsList className="bg-card border border-border h-auto p-1 flex-wrap">
              {categories.map((category) => (
                <TabsTrigger
                  key={category}
                  value={category}
                  className="px-5 py-1.5 text-sm font-medium rounded-md data-[state=active]:bg-primary data-[state=active]:text-primary-foreground"
                >
                  {category}
                </TabsTrigger>
              ))}
            </TabsList>
          </div>

          {categories.map((category) => (
            <TabsContent key={category} value={category} className="mt-0">
              <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                {filteredProjects.length > 0 ? (
                  filteredProjects.map((project, index) => (
                  <Card
                    key={project.id}
                    className="group overflow-hidden border-border bg-card hover:shadow-lg transition-all duration-300 animate-fade-in-up"
                    style={{ animationDelay: `${index * 0.1}s` }}
                  >
                    <div className="relative overflow-hidden aspect-video bg-secondary">
                      {project.image_url ? (
                        <img
                          src={project.image_url}
                          alt={project.title}
                          className="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        />
                      ) : (
                        <div className="w-full h-full flex items-center justify-center bg-secondary">
                          <span className="text-muted-foreground text-sm">{project.title}</span>
                        </div>
                      )}
                      <div className="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300" />
                      <div className="absolute bottom-4 left-4 right-4 flex gap-2 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-4 group-hover:translate-y-0">
                        {project.live_url && (
                          <Button size="sm" asChild>
                            <a href={project.live_url} target="_blank" rel="noopener noreferrer">
                              <ExternalLink className="h-4 w-4 mr-1" />
                              Live
                            </a>
                          </Button>
                        )}
                        {project.github_url && (
                          <Button size="sm" variant="secondary" asChild>
                            <a href={project.github_url} target="_blank" rel="noopener noreferrer">
                              <Github className="h-4 w-4 mr-1" />
                              Code
                            </a>
                          </Button>
                        )}
                      </div>
                    </div>
                    <CardContent className="p-6">
                      {project.category && (
                        <Badge variant="secondary" className="mb-3">
                          {project.category}
                        </Badge>
                      )}
                      <h3 className="text-xl font-semibold text-foreground mb-2 group-hover:text-primary transition-colors">
                        {project.title}
                      </h3>
                      <p className="text-muted-foreground text-sm mb-4 line-clamp-2">
                        {project.description}
                      </p>
                      <div className="flex flex-wrap gap-2">
                        {project.skills.map((skill) => (
                          <span
                            key={skill.id}
                            className="inline-flex items-center gap-1.5 text-xs px-2 py-1 rounded-md bg-accent text-accent-foreground"
                          >
                            {skill.has_logo && skill.logo_url && (
                              <img
                                src={skill.logo_url}
                                alt={skill.name}
                                className="w-3.5 h-3.5 object-contain dark:invert-0"
                              />
                            )}
                            {skill.name}
                          </span>
                        ))}
                      </div>
                    </CardContent>
                  </Card>
                  ))
                ) : (
                  <div className="col-span-full text-center py-12">
                    <p className="text-muted-foreground">No projects found in this category.</p>
                  </div>
                )}
              </div>
            </TabsContent>
          ))}
        </Tabs>
      </div>
    </section>
  )
}


