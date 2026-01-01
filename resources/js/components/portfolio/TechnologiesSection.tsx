import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card"

interface Skill {
  id: number
  name: string
  category: string | null
  logo_url: string | null
  has_logo: boolean
  order: number
}

interface TechnologiesSectionProps {
  skills: Record<string, Skill[]>
}

export function TechnologiesSection({ skills }: TechnologiesSectionProps) {
  const skillCategories = Object.entries(skills)
  const skillsWithoutCategory = skillCategories.find(([cat]) => !cat || cat === "")

  return (
    <section id="technologies" className="py-20 md:py-32 bg-background">
      <div className="container px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h2 className="text-3xl sm:text-4xl md:text-5xl font-bold text-foreground mb-4">
            Technologies & Skills
          </h2>
          <p className="text-lg text-muted-foreground max-w-2xl mx-auto">
            A comprehensive toolkit of technologies I use to build modern, scalable applications.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
          {skillCategories
            .filter(([category]) => category && category !== "")
            .map(([category, categorySkills], index) => (
              <Card
                key={category}
                className="group border-border bg-card hover:shadow-lg hover:border-primary/50 transition-all duration-300 animate-fade-in-up"
                style={{ animationDelay: `${index * 0.1}s` }}
              >
                <CardHeader className="pb-4">
                  <CardTitle className="text-base font-semibold text-foreground">
                    {category}
                  </CardTitle>
                </CardHeader>
                <CardContent>
                  <div className="flex flex-wrap gap-3">
                    {categorySkills.map((skill) => (
                      <div
                        key={skill.id}
                        className="flex items-center gap-2 px-3 py-2 rounded-lg bg-secondary hover:bg-accent transition-colors cursor-default"
                      >
                        {skill.has_logo && skill.logo_url && (
                          <img
                            src={skill.logo_url}
                            alt={skill.name}
                            className="w-5 h-5 object-contain dark:invert-0"
                          />
                        )}
                        <span className="text-sm font-medium text-secondary-foreground">
                          {skill.name}
                        </span>
                      </div>
                    ))}
                  </div>
                </CardContent>
              </Card>
            ))}
        </div>

        {skillsWithoutCategory && skillsWithoutCategory[1].length > 0 && (
          <div className="mt-12 text-center">
            <h3 className="text-lg font-semibold text-foreground mb-4">Additional Skills</h3>
            <div className="flex flex-wrap justify-center gap-2 max-w-3xl mx-auto">
              {skillsWithoutCategory[1].map((skill) => (
                <span
                  key={skill.id}
                  className="text-sm px-4 py-2 rounded-lg bg-secondary text-secondary-foreground hover:bg-accent transition-colors cursor-default"
                >
                  {skill.name}
                </span>
              ))}
            </div>
          </div>
        )}
      </div>
    </section>
  )
}


