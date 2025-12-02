<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PracticeSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sessions = [
            ['day' => 1, 'title' => 'Introduction to Breathing Exercises', 'description' => 'Learn basic breathing techniques to control stammering.', 'tips' => 'Practice deep breathing for 5 minutes daily.'],
            ['day' => 2, 'title' => 'Slow Speech Practice', 'description' => 'Practice speaking slowly to reduce stuttering.', 'tips' => 'Read aloud at half your normal speed.'],
            ['day' => 3, 'title' => 'Vocal Warm-ups', 'description' => 'Warm up your vocal cords with simple exercises.', 'tips' => 'Hum scales and practice tongue twisters.'],
            ['day' => 4, 'title' => 'Confidence Building', 'description' => 'Build confidence through positive affirmations.', 'tips' => 'Repeat "I speak fluently" 10 times daily.'],
            ['day' => 5, 'title' => 'Mirror Practice', 'description' => 'Practice speaking in front of a mirror.', 'tips' => 'Record yourself and review progress.'],
            ['day' => 6, 'title' => 'Pause and Breathe', 'description' => 'Learn to pause and breathe during speech.', 'tips' => 'Pause after every sentence.'],
            ['day' => 7, 'title' => 'Word Repetition', 'description' => 'Repeat difficult words slowly.', 'tips' => 'Choose 5 words and repeat 10 times each.'],
            ['day' => 8, 'title' => 'Storytelling', 'description' => 'Practice telling short stories.', 'tips' => 'Start with 1-minute stories.'],
            ['day' => 9, 'title' => 'Group Practice', 'description' => 'Practice with a friend or family member.', 'tips' => 'Share your progress and get feedback.'],
            ['day' => 10, 'title' => 'Relaxation Techniques', 'description' => 'Learn relaxation methods to reduce anxiety.', 'tips' => 'Practice progressive muscle relaxation.'],
            ['day' => 11, 'title' => 'Articulation Exercises', 'description' => 'Improve articulation with lip and tongue exercises.', 'tips' => 'Practice "puh-puh-puh" sounds.'],
            ['day' => 12, 'title' => 'Public Speaking Prep', 'description' => 'Prepare for public speaking scenarios.', 'tips' => 'Practice introducing yourself confidently.'],
            ['day' => 13, 'title' => 'Daily Journaling', 'description' => 'Keep a journal of your speaking experiences.', 'tips' => 'Note triggers and successes.'],
            ['day' => 14, 'title' => 'Rhythm and Melody', 'description' => 'Use rhythm to improve fluency.', 'tips' => 'Speak in time with music.'],
            ['day' => 15, 'title' => 'Overcoming Blocks', 'description' => 'Strategies for handling speech blocks.', 'tips' => 'Use easy onset of voicing.'],
            ['day' => 16, 'title' => 'Conversation Practice', 'description' => 'Practice everyday conversations.', 'tips' => 'Role-play common scenarios.'],
            ['day' => 17, 'title' => 'Breathing Coordination', 'description' => 'Coordinate breathing with speech.', 'tips' => 'Breathe from the diaphragm.'],
            ['day' => 18, 'title' => 'Positive Visualization', 'description' => 'Visualize successful speaking.', 'tips' => 'Spend 5 minutes visualizing fluent speech.'],
            ['day' => 19, 'title' => 'Reading Aloud', 'description' => 'Practice reading books aloud.', 'tips' => 'Read for 15 minutes daily.'],
            ['day' => 20, 'title' => 'Speech Apps', 'description' => 'Explore speech therapy apps.', 'tips' => 'Try fluency apps for exercises.'],
            ['day' => 21, 'title' => 'Mindfulness Meditation', 'description' => 'Use mindfulness to reduce speech anxiety.', 'tips' => 'Meditate for 10 minutes before speaking.'],
            ['day' => 22, 'title' => 'Tongue Twisters', 'description' => 'Practice challenging tongue twisters.', 'tips' => 'Start slow and increase speed.'],
            ['day' => 23, 'title' => 'Voice Modulation', 'description' => 'Practice varying your voice pitch and volume.', 'tips' => 'Read with different emotions.'],
            ['day' => 24, 'title' => 'Fluency Shaping', 'description' => 'Shape your speech for better fluency.', 'tips' => 'Use prolonged speech techniques.'],
            ['day' => 25, 'title' => 'Social Skills', 'description' => 'Improve social communication skills.', 'tips' => 'Practice active listening.'],
            ['day' => 26, 'title' => 'Stress Management', 'description' => 'Manage stress that affects speech.', 'tips' => 'Exercise regularly to reduce stress.'],
            ['day' => 27, 'title' => 'Professional Help', 'description' => 'Consider seeking professional therapy.', 'tips' => 'Research local speech therapists.'],
            ['day' => 28, 'title' => 'Support Groups', 'description' => 'Join stammering support groups.', 'tips' => 'Connect with others online.'],
            ['day' => 29, 'title' => 'Goal Setting', 'description' => 'Set achievable speech goals.', 'tips' => 'Break goals into small steps.'],
            ['day' => 30, 'title' => 'Progress Review', 'description' => 'Review your progress so far.', 'tips' => 'Celebrate small victories.'],
            ['day' => 31, 'title' => 'Advanced Breathing', 'description' => 'Master advanced breathing techniques.', 'tips' => 'Practice diaphragmatic breathing.'],
            ['day' => 32, 'title' => 'Presentation Skills', 'description' => 'Practice giving presentations.', 'tips' => 'Prepare and deliver a 5-minute talk.'],
            ['day' => 33, 'title' => 'Overcoming Fear', 'description' => 'Face your fears head-on.', 'tips' => 'Speak in challenging situations.'],
            ['day' => 34, 'title' => 'Daily Affirmations', 'description' => 'Use affirmations for confidence.', 'tips' => 'Create personalized affirmations.'],
            ['day' => 35, 'title' => 'Speech Rate Control', 'description' => 'Control your speaking rate.', 'tips' => 'Use a metronome for pacing.'],
            ['day' => 36, 'title' => 'Emotional Regulation', 'description' => 'Regulate emotions during speech.', 'tips' => 'Practice deep breathing when anxious.'],
            ['day' => 37, 'title' => 'Long-Term Maintenance', 'description' => 'Maintain fluency long-term.', 'tips' => 'Continue daily practice.'],
            ['day' => 38, 'title' => 'Teaching Others', 'description' => 'Share your knowledge with others.', 'tips' => 'Mentor someone struggling with stammering.'],
            ['day' => 39, 'title' => 'Final Review', 'description' => 'Review all techniques learned.', 'tips' => 'Create a personal toolkit.'],
            ['day' => 40, 'title' => 'Celebration and Next Steps', 'description' => 'Celebrate your journey and plan ahead.', 'tips' => 'Set new goals for continued improvement.'],
        ];

        foreach ($sessions as $session) {
            \App\Models\PracticeSession::create($session);
        }
    }
}
