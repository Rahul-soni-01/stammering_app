<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Understanding Stammering: Causes and Myths',
                'content' => 'Stammering, also known as stuttering, is a speech disorder that affects the fluency of speech. Contrary to popular myths, it is not caused by nervousness or psychological issues alone. This article explores the neurological and genetic factors that contribute to stammering and debunks common misconceptions.',
                'image' => null,
                'video' => null,
            ],
            [
                'title' => 'Breathing Techniques for Better Speech Control',
                'content' => 'Proper breathing is fundamental to fluent speech. Learn diaphragmatic breathing exercises that can help reduce stammering episodes. This comprehensive guide includes step-by-step instructions for daily practice and integration into your speech therapy routine.',
                'image' => null,
                'video' => null,
            ],
            [
                'title' => 'The Role of Technology in Speech Therapy',
                'content' => 'Modern technology offers innovative tools for speech therapy. From speech therapy apps to AI-powered fluency training programs, discover how technology can supplement traditional therapy methods and provide accessible support for people who stammer.',
                'image' => null,
                'video' => null,
            ],
            [
                'title' => 'Building Confidence: Speaking in Public',
                'content' => 'Public speaking can be particularly challenging for those who stammer. This article provides practical strategies for managing anxiety, preparing presentations, and gradually building confidence in public speaking situations.',
                'image' => null,
                'video' => null,
            ],
            [
                'title' => 'Supporting Children Who Stammer',
                'content' => 'Early intervention is crucial for children who stammer. Parents and educators play a vital role in providing support. Learn about age-appropriate strategies, when to seek professional help, and how to create a supportive environment for young speakers.',
                'image' => null,
                'video' => null,
            ],
            [
                'title' => 'The Science Behind Fluency Shaping Therapy',
                'content' => 'Fluency shaping therapy is a structured approach to improving speech fluency. This article explains the scientific principles behind techniques like easy onset, slow speech, and gentle phonation, and how they work to retrain speech patterns.',
                'image' => null,
                'video' => null,
            ],
            [
                'title' => 'Mindfulness and Meditation for Speech Anxiety',
                'content' => 'Mindfulness practices can significantly reduce speech-related anxiety. Explore meditation techniques specifically designed for people who stammer, including body scans, mindful breathing, and visualization exercises that promote relaxation and confidence.',
                'image' => null,
                'video' => null,
            ],
            [
                'title' => 'Workplace Accommodations for Stammering',
                'content' => 'Many people who stammer face challenges in professional settings. Learn about your rights, reasonable accommodations, and strategies for effective communication in the workplace. This includes tips for job interviews, presentations, and daily interactions.',
                'image' => null,
                'video' => null,
            ],
            [
                'title' => 'The Importance of Support Groups',
                'content' => 'Connecting with others who stammer can be incredibly empowering. Support groups provide a safe space to share experiences, learn coping strategies, and build lasting friendships. Discover how to find local and online support communities.',
                'image' => null,
                'video' => null,
            ],
            [
                'title' => 'Nutrition and Lifestyle Factors Affecting Speech',
                'content' => 'Diet and lifestyle choices can influence speech fluency. This article examines the connection between nutrition, exercise, sleep, and speech performance. Learn about foods that support brain health and habits that promote better communication.',
                'image' => null,
                'video' => null,
            ],
        ];

        foreach ($articles as $article) {
            \App\Models\Article::create($article);
        }
    }
}
